<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới Sinh Viên</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; padding: 30px; display: flex; justify-content: center; }
        .form-container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        h2 { margin-top: 0; color: #007bff; border-bottom: 1px solid #eee; padding-bottom: 10px; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: 500; margin-bottom: 5px; color: #333; }
        .form-group input { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        .form-group input:focus { border-color: #007bff; outline: none; }
        .btn-group { display: flex; justify-content: space-between; margin-top: 20px; }
        .btn-submit { background: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-weight: bold; }
        .btn-submit:hover { background: #218838; }
        .btn-back { background: #6c757d; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px; text-align: center; }
        .btn-back:hover { background: #5a6268; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Thêm Mới Sinh Viên</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label>Mã Sinh Viên:</label>
                <input type="text" name="masv" placeholder="Nhập mã sinh viên..." required>
            </div>
            <div class="form-group">
                <label>Họ và Tên:</label>
                <input type="text" name="hoten" placeholder="Nhập họ và tên..." required>
            </div>
            <div class="form-group">
                <label>Lớp:</label>
                <input type="text" name="lop" placeholder="Nhập lớp..." required>
            </div>
            <div class="btn-group">
                <a href="index.php?url=sinhvien/index" class="btn-back">Quay Lại</a>
                <button type="submit" class="btn-submit">Lưu Thông Tin</button>
            </div>
        </form>
    </div>
</body>
</html>