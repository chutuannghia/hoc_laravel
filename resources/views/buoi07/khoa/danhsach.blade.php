@extends("Buoi07.trangchung")
@section("content")
<div class="container-fluid px-4">
    <h1 class="mt-4">Danh Sách</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Bảng Điều Khiển</a></li>
        <li class="breadcrumb-item active">Khoa</li>
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
                        <th>Mã Khoa</th>
                        <th>Tên Khoa</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ds as $khoa)
                    <tr>
                        <td>{{$khoa->ma_khoa}}</td>
                        <td>{{$khoa->ten_khoa}}</td>
                        <td align="center"><a href="{{route('editKhoa', $khoa->ma_khoa)}}" class="btn btn-success">Sửa</a></td>
                        <td align="center"><a href="{{route('deleteKhoa', $khoa->ma_khoa)}}" class="btn btn-danger">Xoá</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
