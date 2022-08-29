<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    <title>Trang đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
  <body class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng nhập</h3></div>
                    @if (session('tb'))
                        <div class="alert alert-warning text-center">
                            {{ session('tb') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="">
                            <div class="card-body bg-secondary bg-opacity-50 h-100">
                                <h1 class=" card-title text-center"><span style="font-size: 50px;color:red">S</span>ign <span
                                        style="font-size: 50px;color:blueviolet">I</span>n</h1>
                                <form class="forms-sample" action="" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            name="email">
                                        @if($errors->has('email'))
                                            <div class="text-danger">{{$errors->first('email')}}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password">
                                        @if($errors->has('password'))
                                            <div class="text-danger">{{$errors->first('password')}}</div>
                                        @endif

                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Login" class="btn btn-primary me-2 mb-2 mb-md-0">
                                    </div>
                                    <h5 class="text-center mt-3">or sign up with</h5>
                                    <div style="width:max-content;margin:10px auto">
                                        <a href="{{route('githublogin')}}" class="btn btn-link btn-floating mx-1 h4">
                                            <i class="bi bi-github"></i><span class=" nav-link">Github</span></a>

                                        <a href="{{route('googlelogin')}}" class="btn btn-link btn-floating mx-1 h4">
                                            <i class="bi bi-google"></i><span class="nav-link">Google</span></a>
                                    </div>
                                    <a href="{{route('register')}}" class="d-block mt-3 text-muted fs-5 nav-link">Not a user?
                                        <span class="text-danger">Register</span></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small nav-link"><a href="{{route('register')}}">Chưa có tài khoản? <span class="text-danger text-fs-4">Đăng ký</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
  </html>
