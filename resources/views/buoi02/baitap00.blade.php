<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập buổi 02</title>
    <style>
        .khung{
            width: 800px;
            margin:0px auto;
            background-color:#F8E0F1;
            padding-bottom:40px;
            border-radius:50px;
        }
        .khung2{
            width: 800px;
            margin:0px auto;
            background-color:#F7F8E0;
            padding-bottom:40px;
            border-radius:50px;
        }
        .menu{
            margin:0px;
            background-color:black;
            color:white;
            border-radius:10px;
            padding:px 50px;
        }
        ul{
            width: 700px;
            list-style-type:none;
            justify-content:space-between;
            display:flex;
        }
        a{
            text-decoration:none;
            color:white;
            font-weight:bold;
        }
        a:hover{
            color:red;
            background-color:#BDBDBD;
            border-radius:16px;
            padding:10px;
            transition:.5s all;
        }
        li{
            padding:20px 0px;
        }
        a.active{
            color:red;
        }
    </style>
</head>
<body>
    <div class="khung">
        <h1 style="text-align:center;color:red">BÀI TẬP BUỔI 01</h1>
        <div class="menu">
            <ul>
                <li><a href="{{route('baitap01')}}">Bài tập 01</a></li>
                <li><a href="{{route('baitap02')}}">Bài tập 02</a></li>
                <li><a href="{{route('baitap03')}}">Bài tập 03</a></li>
                <li><a href="{{route('baitap04')}}">Bài tập 04</a></li>
                <li><a href="{{route('baitap05')}}">Bài tập 05</a></li>
                <li><a href="{{route('baitap06')}}">Bài tập 06</a></li>
                <li><a href="{{route('baitap07')}}">Bài tập 07</a></li>
                <li><a href="{{route('baitap08')}}">Bài tập 08</a></li>
            </ul>
        </div>
    </div>
    <div class="khung2">
        <h1 style="text-align:center;color:red">BÀI TẬP BUỔI 02</h1>
        <div class="menu">
            <ul>
                <li><a href="{{route('b2baitap01')}}">Bài tập 01</a></li>
                <li><a href="{{route('b2baitap02')}}">Bài tập 02</a></li>
                <li><a href="{{route('b2baitap03')}}">Bài tập 03</a></li>
                <li><a href="{{route('b2baitap04')}}">Bài tập 04</a></li>
                <li><a href="{{route('b2baitap05')}}">Bài tập 05</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
