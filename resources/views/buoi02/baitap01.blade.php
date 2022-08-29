<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 01</title>
    <style>
        .khung{
            width: 1000px;
            margin:0px auto;
            background-color:#D8D8D8;
        }
        .left{
            width: 300px;
            float: left;
            margin:0px;
        }
        .left::after {
        content: "";
        clear: both;
        display: table;
        }
        .right{
            width: 650px;
            float: right;
            margin:0px;
        }
        .right::after {
        content: "";
        clear: both;
        display: table;
        }
        .between{
            width: 50px;
            float:left;
        }
        .dt{
            margin-top:30px;
            padding:10px 15px;
            border-radius:10px;
            border:1px solid black;
            text-decoration:none;
            color:black;
        }
        .dt:hover{
            background-color:black;
            color:white;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="khung">
        <div class="left">
            <img src="../resources/hinh/nhadep.jpg" alt="nha dep" width="100%">
        </div>
        <div class="between"></div>
        <div class="right">
            <h2 style="text-align:center" >Hình Nhà Đẹp Xe Sang</h2>
            <p>Chúng ta hãy đi một vòng toàn cầu để chiêm ngưỡng và thưởng thức hình ảnh những ngôi nhà đẹp nhất trên quốc tế. Và cùng cảm nhận sự hào nhoáng, độc lạ của nó .</p>
            <p>nhiên thì việc có một ngôi nhà vườn mộng mơ là điều mơ ước của họ .</p>
            <p>hình thù chiếc vỏ sò, ngôi nhà được thiết kế xây dựng năm 2006 của một kiến trúc sư nổi tiếng. Ngôi nhà là sự phối hợp giữa đời sống của con người và dung hòa thân mật với vạn vật thiên nhiên .</p>
            <a href="{{route('b2baitap00')}}" class="dt">DETAIL</a>
        </div>
    </div>
</body>
</html>
