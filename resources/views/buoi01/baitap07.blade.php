<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 07</title>
    <style>
        .noidung1{
            width: 601px;
            border:2px solid #01DF01;
            margin:10px auto;
        }
        .table1{
            width: 600px;
            border:1px solid white;
            border-spacing: 1px;
        }
        .table1 tr,th,td{
            border:2px solid #01DF01;
            padding:5px;
            border-radius:5px;
        }
        .table1 tr:nth-child(even){
            background-color:#58FAF4;
        }
        .table2{
            width: 500px;
            border-spacing: 0px;
        }
        .table2 .tr,.th,.td{
            border:2px solid #A901DB;
            padding:5px;
            border-radius:5px;
        }
        a{
            text-decoration:none;
            font-size:25px;
            color:red;
        }
    </style>
</head>
<body>
    <h1 style="color:#01DF01;text-align:center">CHƯƠNG TRÌNH HỌC THIẾT KẾ ĐỒ HOẠ</h1>
    <div class="noidung1">
        <table class="table1">
            <tr style="background-color:#01DF01">
                <th rowspan="2">STT</th>
                <th rowspan="2">TÊN MÔN HỌC</th>
                <th colspan="2">SỐ TIẾT</th>
            </tr>
            <tr style="background-color:#01DF01">
                <th>Lý thuyết</th>
                <th>Thực hành</th>
            </tr>
            <tr>
                <td align="center">1</td>
                <td>Thiết kế mẫu CorellDraw</td>
                <td align="center">30</td>
                <td align="center">60</td>
            </tr>
            <tr>
                <td align="center">2</td>
                <td>Thiết kế mẫu với Illustrator</td>
                <td align="center">30</td>
                <td align="center">60</td>
            </tr>
            <tr>
                <td align="center">3</td>
                <td>Xủ lý hình ảnh với PhotoShop</td>
                <td align="center">30</td>
                <td align="center">60</td>
            </tr>
            <tr>
                <td align="center">4</td>
                <td>MỸ thuật ứng dụng</td>
                <td align="center">30</td>
                <td align="center">30</td>
            </tr>
            <tr>
                <td align="center">5</td>
                <td>Nghệ thuật chữ</td>
                <td align="center">30</td>
                <td align="center">30</td>
            </tr>
            <tr>
                <td align="center">6</td>
                <td>Layout web</td>
                <td align="center">30</td>
                <td align="center">60</td>
            </tr>
            <tr>
                <td align="center">7</td>
                <td>Thiết kế bộ nhận diện thương</td>
                <td align="center">30</td>
                <td align="center">60</td>
            </tr>
            <tr style="background-color:#FE9A2E">
                <td align="center">8</td>
                <td>Hoá luận tốt nghiệp</td>
                <td align="center"> </td>
                <td align="center">60</td>
            </tr>
        </table>
    </div>
    <h1 align="center">KẾT QUẢ HỌC TẬP</h1>
    <table class="table2" align="center" >
        <tr class="tr" style="background-color:#00FF00">
            <th class="th" rowspan="2">Họ tên học sinh</th>
            <th class="th" colspan="2">năm sinh</th>
            <th class="th" rowspan="2">Điểm Tb</th>
            <th class="th" rowspan="2">Xếp loại</th>
        </tr>
        <tr class="tr"  style="background-color:#00FF00">
            <th class="th">Nam</th>
            <th class="th">Nữ</th>
        </tr>
        <tr class="tr">
            <td class="td">Lê Thanh Xuân</td>
            <td class="td"></td>
            <td class="td">1950</td>
            <td class="td" align="center">8.5</td>
            <td class="td" align="center" >Giỏi</td>
        </tr>
        <tr class="tr">
            <td class="td">Phan Thế Hạ</td>
            <td class="td">1985</td>
            <td class="td"></td>
            <td class="td" align="center">6.5</td>
            <td class="td" align="center">Khá</td>
        </tr>
        <tr class="tr">
            <td class="td">Thần hoài Thu</td>
            <td class="td"></td>
            <td class="td">1986</td>
            <td class="td" align="center">9.5</td>
            <td class="td" align="center">Xuất Sắc</td>
        </tr>
        <tr class="tr">
            <td class="td">Trương Lưu Đông</td>
            <td class="td">1984</td>
            <td class="td"></td>
            <td class="td" align="center">6.0</td>
            <td class="td" align="center">trung Bình</td>
        </tr>
        <tr class="tr">
            <td class="td">Lưu Thế Mạc</td>
            <td class="td">1985</td>
            <td class="td"></td>
            <td class="td" align="center">4.5</td>
            <td class="td" align="center">Kém</td>
        </tr>
        <tr  class="tr" style="background-color:#00FF00">
            <td colspan="3" align="center" class="td">Tổng số học sinh đạt</td>
            <td colspan="2" class="td" align="center">4 Học sinh</td>
        </tr>
    </table>
    <div style="text-align:center;padding-top:20px;">
        <a href="{{route('baitap08')}}">Bài tập 08</a>
    </div>
</body>
</html>
