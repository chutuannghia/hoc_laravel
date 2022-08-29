<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container_fluid">
        <h1 class="bg-dark text-white text-center p-2">ĐỌC "THƠ-TRUYỆN_VĂN-TRỰC TUYẾN</h1>
        <nav class="nav fs-4 bg-light">
            <a class="nav-link" href="{{route('thome')}}">Thơ về mẹ</a>
            <a class="nav-link" href="{{route('doctruyen')}}">Đọc truyện ngụ ngôn</a>
            <a class="nav-link" href="{{route('binhluan')}}">Bạn đọc bình luận</a>
        </nav>
        <div class="row">
            <div class="col-md-3">
                <img src="../resources/hinh/banner.jpg" alt="banner" class="img-fluid" width="100%">
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>

        <h5 class="bg-dark text-white text-center p-2">Bản quyền bởi &copy; Tuấn Nghĩa 2022</h5>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
