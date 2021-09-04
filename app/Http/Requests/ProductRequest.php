<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title'=>'required|unique:products',
            'parent_id'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'The Title Field could not be empty',
            'title.unique'=>'The Title must be unique, if not exist on active list then refer to the trashed list',
            'parent_id.required'=>'The Parent Title must be choossen for further process',
            'image.required'=>'The Photo of this product must be filled',
            'image.mimes'=>'The Photo type must be in jpg, jpeg, png',
        ];
    }
}
