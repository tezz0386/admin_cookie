<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsUpdateRequest extends FormRequest
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
            'heading'=>'required|unique:about_us,heading,'.$this->aboutUs->heading,
            'description'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png',
        ];
    }
    public function messages()
    {
        return [
            'heading.required'=>'The HEading Field Could not be empty',
            'heading.unique'=>'The Heading has already taken so please tray another',
            'description.rewuired'=>'Description Field Could not be empty',
            'image.required'=>'The Image must be choosen',
            'image.mimes'=>'The Image type must be jpg, jpeg, or png',
        ];
    }
}
