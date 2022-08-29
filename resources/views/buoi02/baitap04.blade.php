<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 04</title>
    <style>
        .khung{
            width:100%;
            margin:0;
            padding:0;
            border-radius:5px;
            background-color:#F2F2F2;
        }
        .noidung{
            display:flex;
            flex-wrap:wrap;
            margin:10px auto;
            max-width:calc(100% - 5px);
            min-width: calc(100% - 60px);
            justify-content:center;
        }
        .card{
            width: 300px;
            background-color:#E6E6E6;
            border-radius:10px;
            margin:10px 20px;
            box-shadow:5px 3px 2px #BDBDBD;
            cursor:pointer;
        }
        .hinh{
            width: 300px;
            height:200px;
            overflow:hidden;
        }
        img{
            margin:2px 0px;
            padding:0px;
            border-radius:10px;
            filter: grayscale(100%);
        }
        a{
            text-decoration:none;
            color:black;
            padding:10px;
            border-radius:10px;
            background-color:gray;
        }img:hover{
            transform: scale(1.3);
            transition-duration: 1s;
            transition-timing-function: linear;
            transition-delay: 0s;
            filter: grayscale(0);
        }
        h3:hover{
            background: linear-gradient(to right, #D8D8D8 0%, #F8E0E6 10%, #D8CEF6 20%, #A9BCF5 30%, #2E9AFE 40% , #01DF01 60%,#FFFF00 80%, red 100%);
            background-clip: text;
            color:#B40431;
            padding:5px;
            border-radius:6px;
            transition:1s all;
        }
    </style>
</head>
<body>
    <div class="khung">
        <h1 style="text-align:center">THỂ THAO</h1>
        <div class="noidung">
            <p style="text-align:center;padding:0px 30px">
                Theo HLV Nguyễn Quốc Tuấn, cầu thủ Việt Nam đã cố gắng hết
                sức trước khi thua Indonesia ở chung kết U16 Đông Nam Á tối
            </p>
            <div class="noidung">
                <div class="card">
                    <div class="hinh">
                    <img src="../resources/hinh/djokovic.jpg" alt="hinh" width="100%" height="100%" >
                    </div>
                    <div class="body">
                        <h3 style="padding:0px 10px">Djokovic thêm hy vọng dự Mỹ Mở rộng</h3>
                        <p style="padding:0px 20px">
                            MỸ Chính phủ Mỹ ngày 12/8 nới lỏng một số biện pháp hạn chế người chưa tiêm phòng Covid-19, mở ra hy vọng nhập cảnh cho Novak
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="hinh">
                    <img src="../resources/hinh/ronaldo.jpg" alt="hinh" width="100%" height="100%" >
                    </div>
                    <div class="body">
                        <h3 style="padding:0px 10px">Ten Hag: 'Ronaldo sẵn sàng thi đấu trước Brentford'</h3>
                        <p style="padding:0px 20px">
                            ANHHLV Erik ten Hag xác nhận Cristiano Ronaldo đủ thể lực, nhưng không chắc sẽ xếp anh đá chính khi Man Utd gặp Brentford ở vòng 2 Ngoại .
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="hinh">
                    <img src="../resources/hinh/vanlam.jpg" alt="hinh" width="100%" height="100%" >
                    </div>
                    <div class="body">
                        <h3 style="padding:0px 10px">Thủ môn Đặng Văn Lâm sắp gia nhập Bình Định</h3>
                        <p style="padding:0px 20px">
                            TP HCMTheo HLV Nguyễn Đức Thắng, CLB Bình Định đang làm những thủ tục cuối cùng để tuyển mộ thủ môn Đặng Văn Lâm.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="hinh">
                    <img src="../resources/hinh/gv.jpg" alt="hinh" width="100%" height="100%" >
                    </div>
                    <div class="body">
                        <h3 style="padding:0px 10px">Các địa phương đồng loạt 'kêu' thiếu giáo viên</h3>
                        <p style="padding:0px 20px">
                            Trong năm học 2021-2022, Việt Nam có 39 học sinh dự thi Olympic khu vực, quốc tế, trong đó 37 em đạt giải, tương đương 95%.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="hinh">
                    <img src="../resources/hinh/hs.jpg" alt="hinh" width="100%" height="100%" >
                    </div>
                    <div class="body">
                        <h3 style="padding:0px 10px">Học sinh đi muộn, nghỉ học do mưa ngập</h3>
                        <p style="padding:0px 20px">
                            HÀ NỘI Mưa lớn suốt đêm khiến nhiều tuyến đường ở Hà Nội ngập nặng, nhiều học sinh không thể đến trường đúng giờ, thậm chí phải nghỉ học.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div  style="text-align:center;padding-bottom:30px">
        <a href="{{route('b2baitap00')}}" class="dt">Trang Đầu</a>
      </div>
    </div>
</body>
</html>
