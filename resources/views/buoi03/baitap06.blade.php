<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bài tập 06 </title>
</head>
<body>
    <div class="container_fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="background-color:#F3E2A9">
                <h3 class="text-center mx-0 px-0" style="background-color:#F7BE81;color:#B40431">GIẢI PHƯƠNG TRÌNH BẬC NHẤT</h3>
                @if(count($errors) > 0)
                    <div class="error-message">
                        @foreach ($errors->all() as $error)
                            <h5 class="text-danger">{{$error}}</h5>
                        @endforeach
                    </div>
                @endif
                <form action="{{route('tinhpt')}}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label class="form-label col-sm-5">Phương Trình</label>
                        <div class="col-sm-7">
                            <input type="text" name="giatria" value="{{isset($a)? $a : '';}}"  size="5">x +
                            <input type="text" name="giatrib" value="{{isset($b)? $b : '';}}"  size="5"> = 0
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="form-label col-sm-5">NGhiệm</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" value="{{isset($kq)? $kq : '';}}" style="background-color:#F2F5A9" readonly>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-secondary" name="tinh" value="Giả Phương Trình">
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
