<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;

class CategoryController extends Controller
{
    public function getIndex()
    {
        $categories = Category::all();

        return view('backend.category.index', compact('categories'));
    }
    public function getAdd()
    {
        $cate_parent = Category::select('id', 'name', 'parent_id')->get();

        return view('backend.category.add', compact('cate_parent'));
    }

    public function postAdd(Requests\CategoryRequest $request)
    {
        $cate = new Category();
        $cate->name = strtoupper($request->name);
        $cate->alias = strToSlug($request->name);
        $cate->order = $request->order;
        $cate->parent_id = $request->cateParent;
        $cate->keywords = $request->keywords;
        $cate->description = $request->description;
        $cate->save();

        return redirect()->route('getIndexCate')
            ->with('message', 'Thêm thành công!')
            ->with('level', 'success');
    }

    public function getEdit($id)
    {
        $cate = Category::find($id);
        $cate_parent = Category::select('id', 'name', 'parent_id')->where('id', '!=', $id)->get();

        return view('backend.category.edit', compact('cate', 'cate_parent'));
    }

    public function postEdit($id, Requests\CategoryRequest $request)
    {
        $cate = Category::find($id);
        $cate->name = strtoupper($request->name);
        $cate->alias = strToSlug($request->name);
        $cate->order = $request->order;
        $cate->parent_id = $request->cateParent;
        $cate->keywords = $request->keywords;
        $cate->description = $request->description;
        $cate->save();

        return redirect()->route('getIndexCate')
            ->withInput()
            ->with('message', 'Cập nhật thành công!')
            ->with('level', 'success');
    }

    public function getDelete($id)
    {
        $hasCate_child = Category::select('id')->where('parent_id', $id)->groupBy('parent_id')->count();
        if ($hasCate_child == 0) {
            Category::destroy($id);

            return redirect()->route('getIndexCate')
                ->with('message', 'Xóa thành công!');
        } elseif ($hasCate_child > 0) {

            return redirect()->route('getIndexCate')
                ->with('message', 'Xóa thất bại!<br>Đây là danh mục cha, vui lòng xóa danh mục con trước!')
                ->with('level', 'warning');
        }

    }
}
