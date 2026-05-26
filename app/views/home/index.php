<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .logout-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .logout-btn:hover {
            background-color: #da190b;
        }
    </style>
</head>
<body>
    <h1>Chào mừng, <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Khách'; ?>!</h1>
    <nav>
        <a href="/PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=sinhvien/index">Danh sách sinh viên</a> | 
        <a href="/PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=sinhvien/create">Thêm sinh viên</a>
    </nav>
    <br>
    <a href="/PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=home/logout" class="logout-btn">Đăng xuất</a>
</body>
</html>