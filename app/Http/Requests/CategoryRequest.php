<?php

namespace App\Http\Requests;

class CategoryRequest extends Request
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
        $id = $this->route()->parameter('cate');

        if ($actionName == 'postAddCate') {
            return [
                'name' => 'required|unique:categories,name',
                'description' => 'required',
                'keywords' => 'required|max:150',
            ];
        } elseif ($actionName == 'postEditCate') {
            return [
                'name' => 'required|unique:categories,name,' . $id,
                'description' => 'required',
                'keywords' => 'required|max:150',
            ];
        }
    }
}
