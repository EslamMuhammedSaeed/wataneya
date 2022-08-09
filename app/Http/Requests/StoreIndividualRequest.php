<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIndividualRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
                //
                'name'=>'required|max:255',
                'job'=>'required|max:255',
                'employer'=>'required|max:255',
            
                'phone'=>'required',
               
                'country'=>'required|max:255',
                
                'about_wataneya'=>'required|max:255',
        ];
    }
}