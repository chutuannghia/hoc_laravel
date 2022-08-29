@extends("Buoi07.trangchung")
@section("content")
<div class="container-fluid px-4">
    <h1 class="mt-4">Danh Sách</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Bảng Điều Khiển</a></li>
        <li class="breadcrumb-item active">Lớp học</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Bảng Dữ Liệu
        </div>
        @if (session('tb'))
            <div class="alert alert-warning text-center">
                {{ session('tb') }}
            </div>
        @endif
        <div class="card-body">
            <table id="datatablesSimple">
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
                    @foreach ($ds as $lh)
                        <tr>
                             <td align="center">{{$lh->ma_lop}}</td>
                             <td>{{$lh->ten_lop}}</td>
                             <td align="center">{{$lh->ma_khoa}}</td>
                             <td>{{$lh->gvcn}}</td>
                             <td align="center">{{$lh->siso}}</td>
                             <td align="center">{{number_format($lh->hoc_phi)}} (VND)</td>
                             <td align="center">
                                 <a href="{{route('sualh',[$lh->ma_lop])}}" class="btn btn-primary me-2"> Sửa</a>
                                 <a href="{{route('xoalh',[$lh->ma_lop])}}" class="btn btn-warning me-2"> Xóa</a>
                             </td>
                        </tr>
                    @endforeach
                 </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
