@extends("Buoi07.trangchung")
@section("content")
<div class="container-fluid px-4">
    <h1 class="mt-4">Danh Sách</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Bảng Điều Khiển</a></li>
        <li class="breadcrumb-item active">Môn học</li>
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
                        <th>Mã Môn học</th>
                        <th>Tên Môn học</th>
                        <th>Số tín chỉ</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ds as $mh)
                    <tr>
                        <td>{{$mh->ma_mh}}</td>
                        <td>{{$mh->ten_mh}}</td>
                        <td>{{$mh->so_tin_chi}}</td>
                        <td align="center"><a href="{{route('suamh', $mh->ma_mh)}}" class="btn btn-success">Sửa</a></td>
                        <td align="center"><a href="{{route('xoamh', $mh->ma_mh)}}" class="btn btn-danger">Xoá</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
