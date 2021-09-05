<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteRequest extends FormRequest
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
            'logo'=>'required|mimes:jpg,jpeg,png',
            'md_profile'=>'required|mimes:jpg,jpeg,png',
            'address'=>'required',
            'location'=>'required',
            'message'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'logo.required'=>'The Logo could not be empty',
            'logo.mimes'=>'The Logo must be a type of jpeg, jpg, png',
            'md_profile.required'=>'The Profile Picture could not be empty',
            'md_profile.mimes'=>'The Profile Picture must be a type of jpeg, jpg, png',
        ];
    }
}
