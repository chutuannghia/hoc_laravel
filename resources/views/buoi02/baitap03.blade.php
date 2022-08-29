<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 03</title>
    <style>
        .khung{
            width: 800px;
            margin:0px auto;
            background-color:#D8D8D8;
            border-radius:5px;
        }
        .noidung{
            width: 758px;
            display:flex;
            flex-wrap:nowrap;
            margin:0px 20px;
            border-bottom:1px dotted red;
        }
        .vanban{
            width: 640px;
            text-align:justify;
            font-size:1em;
            font-family:verdana;
        }
        .hinh{
            display:block;
            width: 100px;
            height:100px;
            margin:20px 20px 20px 0px;
        }
        a{
            text-decoration:none;
            color:#FFFF00;
            padding:10px;
            border-radius:10px;
            background-color:gray;
            font-weight:bold;
            font-size:20PX;
        }
    </style>
</head>
<body>
    <div class="khung">
       <div class="noidung">
            <div class="hinh">
                <img src="../resources/hinh/han.jpg" alt="han nuoc" style="border-radius:10px;" width="100%">
            </div>
            <div class="vanban">
                <h2>Hàn dưới nước như thế nào?
                </h2>
                <p>Hàn dưới nước gồm hai loại là khô và ướt, thường dùng để sửa chữa tàu thuyền, đường ống, thiết bị và đi kèm nhiều rủi ro.</p>
            </div>
       </div>
       <div class="noidung">
            <div class="hinh">
                <img src="../resources/hinh/tancuong.jpg" alt="tan cuong" style="border-radius:10px;" width="100%">
            </div>
            <div class="vanban">
                <h2>Tân Cương thả 5.000 con gà diệt châu chấu
                </h2>
                <p>
                Trung Quốc đang thử nghiệm một giống gà chạy nhanh và
                 kháng bệnh tật để kiểm soát số lượng châu chấu trên đồng cỏ ở khu tự trị Tân Cương.
                </p>
            </div>
       </div>
       <div class="noidung">
            <div class="hinh">
                <img src="../resources/hinh/khunglong.jpg" alt="khung long" style="border-radius:10px;" width="100%">
            </div>
            <div class="vanban">
                <h2>Loài khủng long giống con lai giữa cá sấu và cự đà
                </h2>
                <p>
                    Các nhà khoa học Argentina hôm 11/8 công bố phát hiện loài khủng long
                    bọc giáp đi bằng hai chân đầu tiên ở Nam Mỹ sống trong kỷ Phấn Trắng.
                </p>
            </div>
       </div>
       <div class="noidung" style="border:none;margin-bottom:30px">
            <div class="hinh">
                <img src="../resources/hinh/marathon.jpg" alt="Marathon" style="border-radius:10px;" width="100%">
            </div>
            <div class="vanban">
                <h2>
                    Giảng viên chạy 5.000 km gây quỹ sau tai nạn nguy kịch
                </h2>
                <p>
                    Nick Ashill, giảng viên 58 tuổi người Mỹ quyết định chạy dọc đất
                    nước để gây quỹ từ thiện sau khi mất 5 năm trên giường bệnh vì tai nạn xe nghiêm trọng.
                </p>
            </div>
       </div>
      <div  style="text-align:center;padding-bottom:30px">
        <a href="{{route('b2baitap00')}}" class="dt">Trang Đầu</a>
      </div>
    </div>
</body>
</html>
