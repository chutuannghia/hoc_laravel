<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 05</title>
    <style>
        .khung{
            width: 800px;
            margin:0px auto;
            background-color:red;
            background-image:url('../resources/hinh/hoahong.jpg');
            background-repeat: no-repeat;
            background-size:cover;
            background-attachment: fixed;
        }
        .noidung{
            width: 600px;
            margin:50px auto;
            border:1px solid white;

        }
        .baner{
            width: 600px;
            background-color:white;
            display:flex;
            flex-wrap:warp
        }
        .tdleft{
            width: 450px;
        }
        .hinh{
            width: 150px;
            float:right;
        }
        .td{
            padding:20px 0px;
            color:white;
            text-align:right;
            background-color:red;
            margin:0px;
        }
        .td1{
            padding:20px 0px;
            color:red;
            text-align:center;
            margin:0px;
        }
        .left{
            width: 50%;
            display:block;
        }
        .right{
            width: 50%;
            display:block;
        }
        .nd{
            width: 600px;
            display:flex;
        }
        a{
            text-decoration:none;
            color:cyan;
            padding:10px;
            border-radius:10px;
            background-color:gray;
        }
    </style>
</head>
<body>
    <div class="khung">
        <div style="height:20px"></div>
        <div class="noidung">
            <div class="baner">
                <div class="tdleft">
                    <h2 class="td" >Công nghệ dầu gội đầu mới </h2>
                    <h2 class="td1">Toả sáng cùng DOUBLUE RICH</h2>
                </div>
                <div class="hinh">
                    <img src="../resources/hinh/rich.jpg" alt="hinh" width="100%">
                </div>
            </div>
            <div class="nd">
                <div class="left">
                    <ol style="list-style-type:square">
                        <li style="color:blue">
                            <span style="color:orange">Sản phẩm khuyễn mãi</span>
                        </li>
                        <div style="padding-left:20px">
                            <li style="color:blue">
                                <span style="color:white">Dầu gội double rich 200ml 400ml có team khuyến mãi</span>
                            </li>
                        </div>
                        <li style="color:blue">
                           <span style="color:orange"> Đối tượng tham gia</span>
                        </li>
                        <div style="padding-left:20px">
                            <li style="color:blue">
                                <span style="color:white">Áp dụng cho tất cả các  người tiêu dùng mua sản phẩm</span>
                            </li>
                        </div>
                        <div style="padding-left:20px">
                            <li style="color:blue">
                                <span style="color:white">
                                    trương trình không áp dụng cho các công ty các của hàng , chinh nhánh cũng như
                                    các thể loại tương tư khác( chỉ dành cho nguời dùng)
                                </span>
                            </li>
                        </div>
                    </ol>
                </div>
                <div class="right">
                    <ol style="list-style-type:square">
                        <li style="color:blue">
                            <span style="color:orange">cách thức nhận giả</span>
                        </li>
                    </ol>
                    <ul style="list-style-type:decimal">
                        <div style="padding-left:20px">
                            <li style="color:white">
                                <span style="font-weight:bold">Giả khuyến khích</span> : khách hàng đổi quà tại các của hàng các chi nhanh lân cân
                            </li>
                        </div>
                        <div style="padding-left:20px">
                            <li style="color:white">
                                <span style="font-weight:bold">Giả đặc biệt nhất nhì</span> : khách hàng cắt
                                phần mã lĩnh thưởng trên sản phẩm gủi về trụ sở công ty lưu ý ahnj chót trương trinh khuyễn mãi
                                ngày 20/9/2022, mọi chi tiết liên hệ 09997897798.
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div style="height:20px"></div>
    </div>
    <div  style="text-align:center;margin:30px">
        <a href="{{route('b2baitap00')}}" class="dt">Trang Đầu</a>
    </div>
</body>
</html>
