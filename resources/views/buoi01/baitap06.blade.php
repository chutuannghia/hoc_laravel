<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài tập 06</title>
    <style>
        .khung{
            width: 800px;
            margin:0px auto;
        }
        .noidung{
            width: 100%;
            display:flex;
        }
        .left{
            width: 50%;
            color:blue;
        }
        .right{
            width: 50%;
            padding-left:100px;
            float:right;
        }
        a{
            text-decoration:none;
            font-size:25px;
            color:red;
        }
    </style>
</head>
<body>
    <div class="khung">
        <h1 style="color:red;text-align:center">CÔNG TY HOA TƯƠI NHÂN ÁI</h1>
        <div class="noidung">
            <div class="left">
                <ol>
                    <li><h3>Giới thiệu</h3></li>
                    <div style="margin-left:50px">
                        <ul style=" list-style-type: circle">
                            <li>Thành lập ngày 25/05/2007</li>
                            <li>Chuyên cung cấp các loại hoa tươi mới</li>
                            <li>Có trên 20 cửa hàng tại TP.HCM</li>
                            <li>Nhận kết giỏ hoa theo yêu cầu của quý khách</li>
                        </ul>
                    </div>
                    <li><h3>Liên hệ</h3></li>
                    <div style="margin-left:50px">
                        <ul style="list-style-type:square">
                            <li>Điện thoại 84-08-8351056</li>
                            <li>Địa chỉ :100 Võ Văn Tần, Quận 3, TP.HCM </li>
                        </ul>
                    </div>
                </ol>
            </div>
            <div class="right">
                <img src="../resources/hinh/giohoa.jpg" alt="GIo hoa" width="200px">
            </div>
        </div>
    </div>
    <div style="text-align:center;padding-top:20px;">
        <a href="{{route('baitap07')}}">Bài tập 07</a>
    </div>
</body>
</html>
