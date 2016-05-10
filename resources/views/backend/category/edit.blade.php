@extends('backend.layouts.master')
@section('controller','Danh mục')
@section('action','Chỉnh sửa')
@section('content')

    <div class="col-lg-7" style="padding-bottom:120px">
        @include('backend.partials.vali_msg')
        <form action="" method="POST">
            <div class="form-group">
                <label>Danh mục cha</label>
                <select class="form-control" name="cateParent">
                    <option value="0">Chọn danh mục</option>
                    <?php cate($cate_parent, 0, "", $cate->parent_id) ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tên danh mục</label>
                <input class="form-control" name="name" placeholder="Tên danh mục"
                       value="{{ old('name',$cate->name) }}"/>
            </div>
            <div class="form-group">
                <label>Sắp xếp</label>
                <input class="form-control" name="order" placeholder="Sắp xếp"
                       value="{{ old('order',$cate->order) }}"/>
            </div>
            <div class="form-group">
                <label>Diễn giải</label>
                <input class="form-control" name="keywords" placeholder="Diễn giải"
                       value="{{ old('keywords',$cate->keywords) }}"/>
            </div>
            <div class="form-group">
                <label>Từ khóa tìm kiếm</label>
                <input class="form-control" name="description" placeholder="Từ khóa tìm kiếm"
                       value="{{ old('description',$cate->description) }}"/>
            </div>
            <button type="submit" class="btn btn-default">Cập nhật</button>
            {{ csrf_field() }}
        </form>
    </div>

@endsection
