<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baì tập 02</title>
    <style>
        .khung{
            background-color:#2ECCFA;
            border-radius:16px;
            width: 600px;
            margin:0px auto;
            padding:0 5px;
        }
        .ol1{
            list-style-type: upper-roman;
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
        <h2 style="color:#DF013A;text-align:right">TRƯƠNG TRÌNH ĐẠO TẠO NGHÀNH WEBSITE</h2>
        <div class="noidung">
            <ol class="ol1">
                <dl>
                    <dd><li style="color:#DF013A;font-size:30px">THIẾT KẾ WEBSITE</li></dd>
                    <dt style="padding:20px 40px">
                        <ol style="color:blue">
                            <li>Ngôn ngữ <span style="font-weight:bold">HTML & FontPage</span></li>
                            <li>Ngôn ngữ kịch bản<span style="font-weight:bold">Javascript</span></li>
                            <li>Thiết kế ảnh đổng <span style="font-weight:bold">Media Flash MX</span></li>
                            <li>Thiết kế giao diện PhotoShop CS6 <span style="font-weight:bold">HTML & FontPage</span></li>
                            <li>Thiết kế webSite <span style="font-weight:bold">Dreamweaver MX</span></li>
                        </ol>
                    </dt>
                    <dd><li style="color:#DF013A;font-size:30px">LẬP TRÌNH WEBSITE</li></dd>
                    <dt style="padding:20px 40px">
                        <ol style="color:blue" start="6">
                            <li>Lập trình & <span style="font-weight:bold">Thiết kế</span> CSDL</li>
                            <li>Lập trình CSDL ASP.NET & SQL serve</li>
                            <li>Quản trị webSite</li>
                            <li><span style="font-weight:bold">Đề tài tốt nghiệp</span></li>
                        </ol>
                    </dt>
                </dl>
            </ol>
        </div>
    </div>
    <div style="text-align:center;padding-top:30px;">
        <a href="{{route('baitap03')}}">Bài tập 03</a>
    </div>
</body>
</html>
