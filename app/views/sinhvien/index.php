<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sinh Viên</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8f9fa; padding: 20px; color: #333; }
        .container { max-width: 900px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 2px solid #eee; padding-bottom: 15px; }
        h1 { margin: 0; color: #007bff; font-size: 24px; }
        .btn-add { background: #28a745; color: white; text-decoration: none; padding: 10px 15px; border-radius: 5px; font-weight: bold; }
        .btn-add:hover { background: #218838; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f1f1f1; font-weight: bold; }
        tr:hover { background-color: #f8f9fa; }
        .footer { text-align: center; margin-top: 30px; font-size: 13px; color: #888; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h1>Danh Sách Sinh Viên</h1>
            </div>
            <div>
                <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                    <a href="index.php?url=sinhvien/create" class="btn-add">+ Thêm Mới</a>
                <?php endif; ?>
                <a href="index.php?url=home" class="btn-add" style="background: #6c757d; margin-left: 10px;">Quay lại</a>
            </div>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Mã SV</th>
                    <th>Họ và Tên</th>
                    <th>Lớp</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" style="text-align: center; color: #777;">Chưa có dữ liệu sinh viên...</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>