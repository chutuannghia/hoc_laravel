<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bài tập 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        table tr:nth-child(odd) {
            background-color: #F5BCA9;
        }
    </style>
</head>
  <body>
    <div class="container">
        <h1 class="text-center fs-2 alert alert-success">Tìm các nghiệm của phương trình sau đây</h1>

        <table class="table">
            <thead>
                <tr style="border-bottom:2px solid black;background:none">
                <th scope="col">STT</th>
                <th scope="col">Phương trình</th>
                <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">01</th>
                <td align="center">3x + 20 = 0</td>
                <td  align="center"><a href="{{route('tinhnghiem',[3,20])}}" class="btn btn-primary">Xem kết quả</a></td>
                </tr>
                <tr>
                <th scope="row">02</th>
                <td align="center">0x + 0 = 0</td>
                <td  align="center"><a href="{{route('tinhnghiem',[0,0])}}" class="btn btn-primary">Xem kết quả</a></td>
                </tr>
                <tr>
                <th scope="row">03</th>
                <td align="center">2x - 9 = 0</td>
                <td  align="center"><a href="{{route('tinhnghiem',[2,-9])}}" class="btn btn-primary">Xem kết quả</a></td>
                </tr>
                <tr>
                <th scope="row">04</th>
                <td align="center">0x - 10 = 0</td>
                <td  align="center"><a href="{{route('tinhnghiem',[0,-10])}}" class="btn btn-primary">Xem kết quả</a></td>
                </tr>
                <tr>
                <th scope="row">05</th>
                <td align="center">3x - 17 = 0</td>
                <td  align="center"><a href="{{route('tinhnghiem',[3,-17])}}" class="btn btn-primary">Xem kết quả</a></td>
                </tr>

            </tbody>
        </table>
        @if(isset($x))
            <div class="alert alert-danger text-center fs-3"> Giá trị x là : {{$x}}</div>
        @endif

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
