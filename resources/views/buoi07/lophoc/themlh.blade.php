@extends("Buoi07.trangchung")
@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Thêm Lớp Mới</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tên lớp</label>
                            <input type="text" class="form-control" placeholder="Tên lớp học" name="tenlop">
                            @if($errors->has('tenlop'))
                                <div class="text-danger">{{$errors->first('tenlop')}}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mã khoa</label>
                            <select name="makhoa" class="form-select">
                                <option value="">Chọn Giá trị</option>
                                <?php $trunglap = ''?>
                                @foreach($lhmk as $mk)
                                    @if ($mk->ma_khoa !=$trunglap)
                                        <option value="{{$mk->ma_khoa}}">Mã khoa: {{$mk->ma_khoa}} </option>
                                        <?php $trunglap = $mk->ma_khoa; ?>
                                    @endif
                                @endforeach
                            </select>
                            @if($errors->has('makhoa'))
                                <div class="text-danger">{{$errors->first('makhoa')}}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Giáo viên chủ nhiệm</label>
                            <input type="text" class="form-control" placeholder="Giáo viên chủ nhiệm" name="gvcn">
                            @if($errors->has('gvcn'))
                                <div class="text-danger">{{$errors->first('gvcn')}}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sĩ số</label>
                            <input type="text" class="form-control" placeholder="Sĩ số" name="siso">
                            @if($errors->has('siso'))
                                <div class="text-danger">{{$errors->first('siso')}}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Học phí</label>
                            <input type="text" class="form-control" placeholder="học  phí" name="hocphi">
                            @if($errors->has('hocphi'))
                                <div class="text-danger">{{$errors->first('hocphi')}}</div>
                            @endif
                        </div>
                        <div class="mb-3 text-center">
                            <input type="submit" value="Thêm" class="btn btn-primary p-2 ml-3" value="Cập Nhật">
                            <a href="{{route('listlh')}}" class="btn btn-warning p-2">Trở về</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
