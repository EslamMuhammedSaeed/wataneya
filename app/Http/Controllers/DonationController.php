<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    
    public function index()
    {


        $title = __('lang.donate_now');

        return view('donation::web.donations.index', compact('title'));
    }

    public function success(Request $request)
    {
        $request->validate(['donation_id' => "required"]);
        $donation = Donation::query()
            ->where('transaction_number', $request->donation_id)
            ->firstOrFail();
        $title = __('lang.donate_now');

        return view('donation::web.donations.success', compact('title', 'donation'));
    }

    /**
     * Display a listing of the resource.
     * @return array
     */
    public function createSession(Request $request): array
    {
        $donation = Donation::query()->create($request->except('_token'));

        $curl = curl_init();
        $data = [
            "apiOperation" => "CREATE_CHECKOUT_SESSION",
            "interaction" => ["operation" => "PURCHASE",
                "returnUrl" => route('web.cibCallBack')
            ],
            "order" => [
                'id' => $donation->id,
                'amount' => $request->amount,
                "currency" => "EGP",
                "description" => "Order Goods",
                "reference" => "donation" . $donation->id
            ],
        ];
        curl_setopt_array($curl, array(
//            CURLOPT_URL => "https://cibpaynow.gateway.mastercard.com/api/rest/version/61/merchant/TESTCIB701357/session",//test
            CURLOPT_URL => "https://cibpaynow.gateway.mastercard.com/api/rest/version/61/merchant/CIB701357/session",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
//                "authorization: Basic bWVyY2hhbnQuVEVTVENJQjcwMTM1NzozOWZmODY1ODIxM2NlNTAxNjBlMDM0YjliMzk4NzY3Mw==", //test
                "authorization: Basic bWVyY2hhbnQuQ0lCNzAxMzU3OjQzMDE1MTJiNTFjMGIyNzU5MWZkZTlhNGU4ZGUzODQy", //live
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: ba0ed4e9-0ff8-8aa6-ad05-8e8a67d4c8ae"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);


        Log::info($response);
        if ($err) {
            Log::info("cURL Error #:" . $err);
            return ['status' => false];
        } else {
            $response = json_decode($response);
            if ($response->result == 'SUCCESS') {
                $donation->update(['transaction_number' => $response->successIndicator]);
                return ['status' => true, 'session' => $response->session->id];
            }
        }

        return ['status' => false];


    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function otherDonationMethods()
    {
        $title = __('lang.other_donate_methods');

        return view('donation::web.donations.other_donate_methods', compact('title'));
    }


    public function callBack(Request $request)
    {
        Log::info($request->all());

        $title = __('lang.donation_thanks');

        $donation = Donation::query()->where('transaction_number', $request->resultIndicator)->first();

        if ($donation) {
            $donation->update(['paid' => 1]);
            Mail::to($donation->email)
                ->send(new SendThanksDonation(['message' => __('lang.thanks_donation', ['name' => $donation->name, 'value' => $donation->amount])]));
        }


        return redirect(route('web.donations.success', ['donation_id' => $request->resultIndicator]));

    }
}
