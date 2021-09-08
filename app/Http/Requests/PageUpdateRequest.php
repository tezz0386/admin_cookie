<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageUpdateRequest extends FormRequest
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
            'title'=>'required|unique:pages,title,'.$this->page->id,
            'title_tag'=>'required|unique:pages,title_tag,'.$this->page->id,
            // 'slug'=>'required|unique:pages,slug,'.$this->page->id,
            'meta_description'=>'required|unique:pages,meta_description,'.$this->page->id,
            'meta_keywords'=>'required|unique:pages,meta_keywords,'.$this->page->id,

        ];
    }
}
