@extends('backend.layouts.master')
@section('controller','Danh mục')
@section('action','Danh sách')
@section('content')

@include('backend.partials.alert_msg')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên</th>
            <th>Sắp xếp</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
        </thead>
        <tbody>
        {{ show_cate($categories) }}
        </tbody>
    </table>

@endsection