<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'contact'=>'unique:contacts|required|max:14|min:9',
            'email'=>'required|unique:contacts|email',
        ];
    }
    public function messages()
    {
        return [
            'contact.unique'=>'This Contact already taken so please another contact',
            'contact.required'=>'contact no could not be empty',
            'contact.max'=>'Contact no could not be more then 14 number',
            'contact.min'=>'Contact not could not be less then 9 number',
            'email.email'=>'Pleae enter valid email address',
            'email.unique'=>'This Email already has taken so please try an other email',
            'email.required'=>'Emial Field could not be empty',
        ];
    }
}
