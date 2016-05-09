<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\News;
use File;

class NewsController extends Controller
{
    public function getIndex()
    {
        $news = News::all();
        $i = 1;

        return view('backend.news.index', compact('news', 'i'));
    }

    public function getAdd()
    {
        $categories = Category::select('id', 'name', 'parent_id')->get();
        return view('backend.news.add', compact('categories'));
    }

    public function postAdd(Requests\NewsRequest $request)
    {
        $file = $request->file('image');
        $image = date('YmdHis-') . $file->getClientOriginalName();

        News::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request['content'],
            'image' => $image,
            'status' => $request->status,
            'keywords' => $request->keywords,
            'category_id' => $request->cate,
            'user_id' => \Auth::user()->id,
        ]);

        $file->move('upload/images/', $image);

        return redirect()->route('getIndexNews')
            ->with('message', 'Thêm thành công!')
            ->with('level', 'success');
    }

    public function getEdit($id)
    {
        $news = News::find($id);

        $user = \Auth::user();
//      Root can edit
        if ($user->id != '1' && $user->id != $news->user_id) {
            return redirect()->route('getIndexNews')
                ->with('level', 'warning')
                ->with('message', 'Sửa thất bại<br>Bài viết này không do bạn tạo!');
        }
        $category = Category::select('id', 'name', 'parent_id')->get();

        return view('backend.news.edit', compact('news', 'category'));
    }

    /**
     * @param $id
     * @param Requests\NewsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit($id, Requests\NewsRequest $request)
    {

        $news = News::find($id);
        $file = $request->file('image');
        if (!empty($file)) {
            $old_image = $news->image;
            \File::delete('upload/images/' . $old_image);

            $image = date('YmdHis-') . $file->getClientOriginalName();
            $file->move('upload/images/', $image);
            $news->image = $image;
        }

        $news->title = $request->title;
        $news->summary = $request->summary;
        $news->content = $request->content;
        $news->keywords = $request->keywords;
        $news->status = $request->status;
        $news->category_id = $request->cate;
        $news->save();

        return redirect()->route('getIndexNews')
            ->withInput()
            ->with('message', 'Cập nhật thành công!')
            ->with('level', 'success');
    }

    public function getDelete($id)
    {
        $news = News::find($id);
        $user = \Auth::user();
        $file = 'upload/images/' . $news->image;

//      Root can delete
        if ($user->id == '1' || $user->id == $news->user_id) {
            File::delete($file);
            $news->delete();

            return redirect()->route('getIndexNews')
                ->with('level', 'success')
                ->with('message', 'Xóa thành công!');
        }

        return redirect()->route('getIndexNews')
            ->with('level', 'warning')
            ->with('message', 'Xóa thất bại<br>Bài viết này không do bạn tạo!');
    }
}
