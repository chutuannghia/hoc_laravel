<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bài tập 01 - Hình chữ nhật </title>
</head>
<body>
    <div class="container">
        <div class="bg-primary py-2 text-center fs-2 text-white" style="border-radius:10px">
            TÍNH CHU VI - DIỆN TÍCH HÌNH CHỮ NHẬT
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Hình Chữ Nhật</th>
                    <th scope="col">Xử Lý</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Chiều dài = 3.2cm - Chiều rộng = 13cm</td>
                    <td><a href="{{route('tinhcvdt',[3.2,13])}}" class="btn btn-success"> Tính </a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Chiều dài = 5.3cm - Chiều rộng = 20cm</td>
                    <td><a href="{{route('tinhcvdt',[5.3,20])}}" class="btn btn-success"> Tính </a></td>
                </tr>
            </tbody>
        </table>
        @if (isset($cv) && isset($dt))
            <div class="alert alert-danger text-center fs-3">
                Chu vi: {{$cv}}cm - Diện tích: {{$dt}}cm<sup>2</sup>
            </div>
        @endif
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
