<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .logout-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .logout-btn:hover {
            background-color: #da190b;
        }
    </style>
</head>
<body>
    <h1> Thêm sinh viên </h1>
    <form action="/sinhvien/store" method="POST">
        <label for="MSSV">Mã sinh viên</label>
        <input type="text" name="MSSV" id="MSSV">
        <br>
        <label for="HoTen">Họ tên</label>
        <input type="text" name="HoTen" id="HoTen">
        <br>
        <label for="GioiTinh">Giới tính</label>
        <input type="text" name="GioiTinh" id="GioiTinh">
        <br>
        <label for="malop">Mã lớp</label>
        <input type="text" name="malop" id="malop">
        <br>
        <input type="submit" value="Thêm">
    </form>
    <p>Đây là trang tạo sinh viên</p>
</body>
</html>