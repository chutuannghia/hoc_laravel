<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 01</title>
    <style>
        .khung{
            width: 500px;
            margin:0px auto;
            text-align:center;
        }
        .tieude{
            padding:20px 0px;
            background-color:#F6CEF5;
            color:#FF0080;
            border-radius:20px;
            box-shadow: 5px 3px 1px #F6CEF5, 1px 10px 25px #F6CEF5, 10px 7px 5px #FF0080;
            outline-style:none;
            font-family: cursive;

        }
        .noidung{
            background-color:#F5F6CE;
            border-radius:16px;
            padding:20px;
            box-shadow: 6px 2px 1px #DF7401, 1px 5px 2px #FA5882, 5px 1px 10px #F7FE2E;
            margin-bottom:40px;
            box-sizing:border-box;
            font-family:verdana;
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
        <h1 class="tieude">MẸ !</h1>
        <div class="noidung">
            <p style="color:blue">
                Mẹ yêu ơi con ngàn lần xin lỗi <br>
                Nửa cuộc đời chưa trả hiếu mẹ cha <br>
                Bữa cơm ăn giấc ngủ cũng chỉ là <br>
                Trong cuộc sống muôn nhà đều như thế <br>
            </p>
            <hr>
            <p style="color:purple">
                Mẹ vẫn xem như con còn thơ bé <br>
                Vẫn nâng niu lo lắng chẳng nghỉ ngơi <br>
                Suốt đời này con nợ mẹ, mẹ ơi! <br>
                Nợ nhiều lắm cả đời không trả hết <br>
            </p>
            <hr>
            <p style="color:green">
                Ngày hiền mẫu từ tâm thành con viết <br>
                Một nét đưa là tựa một bông hoa <br>
                Tặng mẹ yêu lưu gửi để làm quà <br>
                Tấm lòng con trẻ chỉ mẹ là hiểu rõ <br>
            </p>
        </div>
        <a href="{{route('baitap02')}}">Bài tập 02</a>
    </div>
</body>
</html>
