<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 02</title>
    <style>
        .khung{
            width: 600px;
            margin:0px auto;
            background-color:#D8D8D8;
            border:1px solid blue;
            border-radius:5px;
        }
        .hinh{
            display:block;
            width: 300px;
            margin:0px auto;
            margin-bottom:20px;
        }
        .dt{
            margin-top:30px;
            padding:10px 15px;
            border-radius:10px;
            border:1px solid black;
            text-decoration:none;
            color:white;
            background-color:gray;
        }
        .noidung{
            padding:0px;
            display:block;
        }
        .dt:hover{
            background-color:black;
            color:red;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="khung">
        <div class="hinh">
            <img src="../resources/hinh/nhadep.jpg" alt="nha dep" width="100%">
        </div>
        <div class="noidung">
            <h2 style="text-align:center">CHUYÊN <span style="color:blue">KINH DOANH</span> NHÀ ĐẤT</h2>
            <p style="text-align:center">Nhiên thì việc có một ngôi nhà vườn mộng mơ là điều mơ ước của họ. Ngôi nhà <br> nằm trên hòn đảo Sentosa của Nước Singapore, với cấu trúc ngặt nghèo thống nhất, phân tầng, ban công to lớn được phủ lên đó một màu xanh của vạn vật thiên nhiên. Không chỉ mang đến một khoảng trống đẹp mà nó còn mang đến vận may và phúc lộc cho ngôi nhà </p>
            <div style="text-align:center;margin:20px 0px">
                <a style="margin-right:20px" class="dt" href="{{route('b2baitap00')}}">Đăng Ký</a>  <a class="dt" href="{{route('b2baitap00')}}">Đăng Nhập</a>
            </div>
        </div>
    </div>
</body>
</html>
