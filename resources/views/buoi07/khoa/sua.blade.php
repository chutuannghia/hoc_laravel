@extends("Buoi07.trangchung")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Sửa Khoa</h3>
                    @if (count($errors) > 0)
                        <div class="text-center alert alert-danger">{{$errors->first("tenkhoa")}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" value="{{$khoa[0]['ma_khoa']}}" type="text" placeholder="Mã Khoa tự tăng" readonly />
                                    <label for="inputName">Mã Khoa</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="tenkhoa" value="{{$khoa[0]['ten_khoa']}}" type="text" placeholder="Nhập tên khoa" />
                                    <label for="inputLastName">Tên Khoa</label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary btn-block" name="luutru" value="Cập Nhật">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
