<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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
        $rules =  [
            'title'             => 'required|unique:articles',
            'short_description' => 'required|max:255',
            'content'           => 'required'
        ];

        if($this->isMethod('put') and $this->is("article/*/update")){
            $rules['title'] = 'required|unique:articles,title,'.$this->article->id;
        }

        return $rules;
    }
}
