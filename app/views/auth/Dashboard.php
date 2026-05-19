<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hệ thống QLSV</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .dashboard-box { background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); text-align: center; max-width: 500px; width: 100%; }
        h1 { color: #28a745; margin-bottom: 10px; }
        h2 { color: #333; margin-bottom: 30px; }
        .author-info { font-size: 14px; color: #6c757d; margin-bottom: 25px; }
        .btn-group a { display: inline-block; padding: 10px 20px; margin: 5px; text-decoration: none; border-radius: 5px; color: #fff; font-weight: bold; transition: 0.3s; }
        .btn-manage { background: #007bff; }
        .btn-manage:hover { background: #0056b3; }
        .btn-logout { background: #dc3545; }
        .btn-logout:hover { background: #c82333; }
    </style>
</head>
<body>
    <div class="dashboard-box">
        <h1>Đăng Nhập Thành Công</h1>
        <h2>Chào mừng, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <div class="author-info">
            Vai trò: <strong><?php echo ($_SESSION['role'] === 'admin') ? 'Quản trị viên' : 'Sinh viên'; ?></strong>
        </div>
        <div class="btn-group">
            <?php if($_SESSION['role'] === 'admin'): ?>
                <a href="index.php?url=sinhvien/index" class="btn-manage">Quản lý Sinh viên</a>
            <?php endif; ?>
            <a href="index.php?url=auth/logout" class="btn-logout">Đăng Xuất</a>
        </div>
    </div>
</body>
</html>