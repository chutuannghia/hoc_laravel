<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bài tập 03 </title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="border:1px solid red">
                <div class="bg-dark py-2 rounded text-white text-center fs-5">
                    TÍNH LƯƠNG NHÂN VIÊN
                </div>
            <form action="{{route('tinhluong')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Ngày Công</label>
                    <input type="text" class="form-control" name="ngaycong" value="{{isset($nc)? $nc : '';}}">
                    @if($errors->has('ngaycong'))
                            <div class="text-danger">{{$errors->first('ngaycong')}}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Lương Ngày</label>
                    <input type="text" class="form-control" name="luongngay" value="{{isset($lg)? $lg : '';}}">
                    @if($errors->has('luongngay'))
                            <div class="text-danger">{{$errors->first('luongngay')}}</div>
                    @endif
                </div>
                <div class="mb-3 text-center">
                    <input type="submit" class="btn btn-primary" name="tinhluong" value="Tính Lương">
                </div>
            </form>
            @if (isset($lt))
                @if (is_numeric($lt))
                    <div class="alert alert-danger text-center">{{number_format($lt)}}đ</div>
                @endif
            @else
                <div class="alert alert-danger text-center">Bạn vui lòng nhập giá trị tính lương <span style="color:red">*</span> (Số)</div>
            @endif
            </div>


            <div class="col-md-4"></div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
