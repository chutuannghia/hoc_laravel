<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bài tập 04 </title>
</head>
<body>
    <div class="container_fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="background-color:#F3E2A9">
                <h2 class="text-center mx-0 px-0" style="background-color:#F7BE81;color:#B40431">DIỆN TÍCH và CHU VI Hình Tròn</h2>
                <form action="{{route('tinhht')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Bán Kính</label>
                        <input type="text" class="form-control" name="bankinh" value="{{isset($bk)? $bk : '';}}">
                        @if($errors->has('bankinh'))
                            <div class="text-danger">{{$errors->first('bankinh')}}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diện Tích</label>
                        <input type="text" class="form-control" value="{{isset($dt)? $dt : '';}}" readonly style="background-color:#F5A9D0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chu Vi</label>
                        <input type="text" class="form-control" value="{{isset($cv)? $cv : '';}}" style="background-color:#F5A9D0" readonly>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-primary" name="tinh" value="Tính">
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
