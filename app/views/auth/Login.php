<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - Hệ Thống QLSV</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #e9ecef; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-card { background: white; padding: 30px 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 350px; }
        .login-card h1 { text-align: center; color: #333; margin-bottom: 5px; }
        .login-card p.subtitle { text-align: center; color: #6c757d; font-size: 14px; margin-bottom: 25px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; color: #495057; font-weight: 500; }
        .form-group input { width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; box-sizing: border-box; outline: none; transition: 0.3s; }
        .form-group input:focus { border-color: #80bdff; box-shadow: 0 0 5px rgba(0,123,255,0.25); }
        .btn-submit { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: 0.3s; font-weight: bold; }
        .btn-submit:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="login-card">
        <h1>Đăng Nhập</h1>
        <p class="subtitle">Hệ thống QLSV</p>
        
        <?php if (isset($error)): ?>
            <div style="color: #dc3545; background: #f8d7da; padding: 10px; border-radius: 4px; margin-bottom: 15px; text-align: center; font-size: 14px;">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        
        <form action="index.php?url=auth/login" method="POST">
            <div class="form-group">
                <label for="username">Tài khoản</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập..." required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu..." required>
            </div>
            <button type="submit" class="btn-submit">Đăng Nhập</button>
        </form>
    </div>
    <script>
        window.onload = function() {
            console.log("Auth screen loaded successfully.");
        };
    </script>
</body>
</html>