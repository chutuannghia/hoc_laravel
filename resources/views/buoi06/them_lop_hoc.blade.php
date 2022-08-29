@extends('buoi06.trangchu')
@section('title','Thêm lớp học')
@section('content')
    <div class="row">
        <div class="text-center">
            <h1 class="alert alert-danger">Thêm lớp học</h1>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="{{route('xulythemlop')}}" method="post">
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
                    <input type="submit" value="Thêm" class="btn btn-primary p-2 ml-3">
                    <a href="{{route('dslh')}}" class="btn btn-warning p-2">Trở về</a>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
