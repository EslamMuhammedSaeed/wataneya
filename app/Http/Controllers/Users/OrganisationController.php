<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrganisationRequest;
use App\Models\Organisation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use File;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        return view('users.organisation_form', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrganisationRequest $request)
    {
        //
            //
            $user = Auth::user();
            $validated = $request->validated();
            $validated = $request->safe();
          
            if($request->hasFile('image')){
                $img = Image::make($request->image);
                $img->resize(100, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->crop(100, 100);
                $user = Auth::user();
                // File::makeDirectory(storage_path('app/public/individuals_profile_photos/'));
                $profileImageName = $user->id.'_image'.time().'.'.request()->image->getClientOriginalExtension();
                $img->save(storage_path('app/public/individuals_profile_photos/'). $profileImageName, 100, 'jpg');
                $path_profile_photo ='individuals_profile_photos/'.$profileImageName;
                $user_1 = User::where('id',Auth::user()->id)->update([
                    'avatar'=> $path_profile_photo,
                ]);
                // dd($user_1);
            } 

        $organization = Organisation::where('user_id',Auth::user()->id)->first();
            if($organization){
                $organization->delete();
        }    
        $org = Organisation::create([
            'name'=>$request->name,
            'user_id'=> Auth::user()->id,
            'category'=>$request->category,
            'field'=>$request->field,
            'year'=>$request->year,
            'website'=>$request->website,
            'facebook'=>$request->facebook,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'geo'=>$request->geo,
            'address'=>$request->address,
            'governorate'=>$request->governorate,
            'country'=>$request->country,
            'communication_way'=>$request->communication_way,
            'employees_no'=>$request->employees_no,
            'point_of_contact_name'=>$request->point_of_contact_name,
            'point_of_contact_position'=>$request->point_of_contact_position,
            'point_of_contact_email'=>$request->point_of_contact_email,
            'point_of_contact_phone'=>$request->point_of_contact_phone,
            'about_wataneya'=>$request->about_wataneya,
            
        ]);
        Auth::user()->update([
            'documented_at' =>now(),
        ]);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(){
        $user = Auth::user();
        $organisation = $user->organisation;
        return view('users.organisation_edit', compact('user','organisation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrganisationRequest $request)
    {
        //
            //
            $user = Auth::user();
            $validated = $request->validated();
            $validated = $request->safe();
          
            if($request->hasFile('image')){
                $img = Image::make($request->image);
                $img->resize(100, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->crop(100, 100);
                $user = Auth::user();
                // File::makeDirectory(storage_path('app/public/individuals_profile_photos/'));
                $profileImageName = $user->id.'_image'.time().'.'.request()->image->getClientOriginalExtension();
                $img->save(storage_path('app/public/individuals_profile_photos/'). $profileImageName, 100, 'jpg');
                $path_profile_photo ='individuals_profile_photos/'.$profileImageName;
                $user_1 = User::where('id',Auth::user()->id)->update([
                    'avatar'=> $path_profile_photo,
                ]);
                // dd($user_1);
            } 

           
        $user->organisation->update([
            'name'=>$request->name,
            'user_id'=> Auth::user()->id,
            'category'=>$request->category,
            'field'=>$request->field,
            'year'=>$request->year,
            'website'=>$request->website,
            'facebook'=>$request->facebook,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'geo'=>$request->geo,
            'address'=>$request->address,
            'governorate'=>$request->governorate,
            'country'=>$request->country,
            'communication_way'=>$request->communication_way,
            'employees_no'=>$request->employees_no,
            'point_of_contact_name'=>$request->point_of_contact_name,
            'point_of_contact_position'=>$request->point_of_contact_position,
            'point_of_contact_email'=>$request->point_of_contact_email,
            'point_of_contact_phone'=>$request->point_of_contact_phone,
            'about_wataneya'=>$request->about_wataneya,
            
        ]);
        
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
