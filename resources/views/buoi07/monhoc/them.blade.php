@extends("Buoi07.trangchung")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Thêm Môn Mới</h3>
                    @if (count($errors) > 0)
                        <div class="text-center alert alert-danger">{{$errors->first("tenkhoa")}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="my-2">
                            <div class="mb-3">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" type="text" placeholder="Mã môn học tự tăng" readonly />
                                    <label for="inputName">Mã Môn Học</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input class="form-control" name="tenmh" type="text" placeholder="Nhập tên Môn Học" />
                                    @if($errors->has('tenmh'))
                                        <div class="text-danger">{{$errors->first('tenmh')}}</div>
                                    @endif
                                    <label for="inputLastName">Tên Môn Học</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input class="form-control" name="sotinchi" type="text" placeholder="Nhập tên Môn Học" />
                                    @if($errors->has('sotinchi'))
                                        <div class="text-danger">{{$errors->first('sotinchi')}}</div>
                                    @endif
                                    <label for="inputLastName">Số tín chỉ</label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <div class="mb-3 text-center">
                                    <input type="submit" value="Lưu Trữ" class="btn btn-primary p-2 ml-3" value="Lưu Trữ">
                                    <a href="{{route('listmh')}}" class="btn btn-warning p-2">Trở về</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
