<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'title'=>'required|unique:categories,title,'.$this->category->id,
        ];
    }
    public function messages()
    {
        return[
            'title.unique'=>'The title has already taken so please see on trash or on active list',
            'title.required'=>'This Title Field Could not Empty',
        ];
    }
}
