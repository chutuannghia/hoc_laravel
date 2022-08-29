@extends('buoi06.trangchu')
@section('tilte','Danh sách lớp học')
@section('content')
    <div class="text-center">
        <h1 class="alert alert-danger">Danh sách lớp học</h1>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            @if (session('tb'))
                <div class="alert alert-warning text-center">
                    {{ session('tb') }}
                </div>
            @endif
            <div class="mb-3">
                <a href="{{route('themlophoc')}}" class="btn btn-success">Thêm lớp học</a>
            </div>
            <table class="table table-bordered border-primary p-2">
                <thead>
                   <tr>
                        <th>Mã lớp</th>
                        <th>Tên lớp</th>
                        <th>Mã khoa</th>
                        <th>Gvcn</th>
                        <th>Siso</th>
                        <th>Học phí</th>
                        <th>Thao tác</th>
                   </tr>
                </thead>
                <tbody>
                   @foreach ($dslh as $lh)
                       <tr>
                            <td align="center">{{$lh->ma_lop}}</td>
                            <td>{{$lh->ten_lop}}</td>
                            <td align="center">{{$lh->ma_khoa}}</td>
                            <td>{{$lh->gvcn}}</td>
                            <td align="center">{{$lh->siso}}</td>
                            <td align="center">{{number_format($lh->hoc_phi)}} (VND)</td>
                            <td align="center">
                                <a href="{{route('sualophoc',[$lh->ma_lop])}}" class="btn btn-primary me-2"> Sửa</a>
                                <a href="{{route('xoalophoc',[$lh->ma_lop])}}" class="btn btn-warning me-2"> Xóa</a>
                            </td>
                       </tr>
                   @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="6" class="text-center text-danger">
                            Tổng số lớp học:{{$dslh->count()}} <br>
                            Sĩ số lớp Nhất:{{$dslh->max('siso')}} <br>
                            Sĩ số nhỏ nhất :{{$dslh->min('siso')}}
                         </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>
@endsection
