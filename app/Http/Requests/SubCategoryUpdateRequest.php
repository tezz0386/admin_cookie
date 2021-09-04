<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryUpdateRequest extends FormRequest
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
            'title'=>'required|unique:sub_categories,title,'.$this->subCategory->id,
            'parent_id'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'The Sub Category Title must be Filled',
            'title.unique'=>'The Title must be unique, you can view on trash or again can create if not created',
            'parent_id.required'=>'The Parent Title must be selected for further process',
        ];
    }
}
