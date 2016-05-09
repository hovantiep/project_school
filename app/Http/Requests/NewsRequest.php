<?php

namespace App\Http\Requests;

class NewsRequest extends Request
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
        $actionName = \Request::route()->getName();
        $id = $this->route()->parameter('news');

        if ($actionName == 'postAddNews') {
            return [
                'cate' => 'exists:categories,id',
                'title' => 'required|max:255|unique:news,title',
                'summary' => 'required',
                'content' => 'required',
                'image' => 'required|image',
                'keywords' => 'required|max:150',
            ];
        } elseif ($actionName == 'postEditNews') {
            return [
                'cate' => 'exists:categories,id',
                'title' => 'required|max:255|unique:news,title,' . $id,
                'summary' => 'required',
                'content' => 'required',
                'image' => 'image',
                'keywords' => 'required|max:150',
            ];
        }
    }
}
