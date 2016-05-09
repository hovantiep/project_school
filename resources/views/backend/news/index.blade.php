@extends('backend.layouts.master')
@section('controller','Tin tức')
@section('action','Danh sách')
@section('content')
    @include('backend.partials.alert_msg')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tiêu đề</th>
            <th>Tác giả</th>
            <th>Hiển thị</th>
            <th>Danh mục</th>
            <th>Thời gian</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $item)
            <tr class="odd gradeX" align="center">
                <td>{{ $i++ }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->user['name'] }}</td>
                <td>{{ ($item->status) ? 'Có' : 'Không' }}</td>
                <td>{{ $item->category['name'] }}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d / m / Y') }}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                            onclick="return confirmDel('Chắc xóa không?')" href="{{ route('getDeleteNews',$item->id) }}"> Xóa</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                            href="{{ route('getEditNews',$item->id) }}"> Sửa</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection