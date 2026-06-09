<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
    <div class="header">
        <h1><?php echo $title; ?></h1>
        <a href="/PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=home/logout" class="logout-btn">Đăng xuất</a>
    </div>
    <nav>
        <a href="/PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=home/index">Trang chủ</a> | 
        <a href="/PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=sinhvien/create">Thêm sinh viên</a>
    </nav>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>MSSV</th>
                <th>Họ tên</th>
                <th>Giới tính</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sinhvien as $sv): ?>
                <tr>
                    <td><?php echo $sv['id']; ?></td>
                    <td><?php echo $sv['MSSV']; ?></td>
                    <td><?php echo $sv['HoTen']; ?></td>
                    <td><?php echo $sv['GioiTinh']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>