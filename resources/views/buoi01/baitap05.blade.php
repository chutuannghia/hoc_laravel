<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 05</title>
    <style>
        .khung{
            margin:0px 5%;
            font-size:20px;
        }
        .noidung{
            text-align:justify;
        }
        ul li{
            padding-bottom:20px ;
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
        <p>Trong html <span style="color:red">Có 3 kiểu danh sách (list type)</span>,
            <span style="color:blue"> Đó là kiểu sắp xếp (Odered List)</span>,
            <span style="color:green">Kiểu không sắp xếp (unodered list)</span> và
            <span style="color:green"> kiểu danh sách mô tả (description list)</span>.Cụ thể:
        </p>
        <div class="noidung">
            <img src="../resources/hinh/html.jpg" alt="hinh" align="right">
            <ul type="circle">
                <li>
                    Kiểu sắp xếp ( <span style="font-weight:bold">Odered list</span> ) là kiểu hiển thị một dạng danh sách
                    con của nó được sắp xếp theo thứ tự bẳng số hoặc chữ cái.
                </li>
                <li>
                    Kiểu không sắp xếp ( <span style="font-weight:bold">Unodered list</span>) là Kiểu danh sách mà
                    các con của nó không được sắp xếp theo thứ tự mà chủ đánh dấu bằng một ký tự đặc trưng.
                </li>
                <li>
                    Kiểu mô tả (<span style="font-weight:bold">Description list</span>): là kiểu  hiển thị danh sách
                    các mục con sẽ không đánh dấu thứ tự , nhưng nó sẽ kèm theo 1 đoạn mô tả.
                </li>
            </ul>
        </div>
    </div>
    <div style="text-align:center;padding-top:20px;">
        <a href="{{route('baitap06')}}">Bài tập 06</a>
    </div>
</body>
</html>
