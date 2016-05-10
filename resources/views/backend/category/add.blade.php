@extends('backend.layouts.master')
@section('controller','Danh mục')
@section('action','Thêm mới')
@section('content')

    <div class="col-lg-7" style="padding-bottom:120px">
        @include('backend.partials.vali_msg')
        <form action="" method="POST">
            <div class="form-group">
                <label>Danh mục cha</label>
                <select class="form-control" name="cateParent">
                    <option value="0">Chọn danh mục</option>
                    <?php cate($cate_parent); ?>
                </select>
            </div>
            <div class="form-group">
                <label>Tên danh mục</label>
                <input class="form-control" name="name" placeholder="Tên danh mục"
                       value="{{ old('name') }}"/>
            </div>
            <div class="form-group">
                <label>Sắp xếp</label>
                <input class="form-control" name="order" placeholder="Sắp xếp"
                       value="{{ old('order') }}"/>
            </div>
            <div class="form-group">
                <label>Diễn giải</label>
                <input class="form-control" name="keywords" placeholder="Diễn giải"
                       value="{{ old('keywords') }}"/>
            </div>
            <div class="form-group">
                <label>Từ khóa tìm kiếm</label>
                <input class="form-control" name="description" placeholder="Từ khóa tìm kiếm"
                       value="{{ old('description') }}"/>
            </div>
            <button type="submit" class="btn btn-default">Thêm</button>
            <button type="reset" class="btn btn-default">Làm lại</button>
            {{ csrf_field() }}
        </form>
    </div>

@endsection
