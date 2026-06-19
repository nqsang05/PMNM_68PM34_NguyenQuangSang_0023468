<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
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
        <a href="/sinhvien/create" class="btn btn-success" style="margin-bottom: 10px;">Thêm sinh viên</a>
        <table>
            <tr>
            <th>STT</th>
            <th>MSSV</th>
            <th>Họ Tên</th>
            <th>Giới Tính</th>
            <th>Mã lớp</th>
            <th>Thao tác</th>
            </tr>
            <?php foreach ($sinhviens as $index => $sinhvien) : ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo $sinhvien['MSSV']; ?></td>
                <td><?php echo $sinhvien['HoTen']; ?></td>
                <td><?php echo $sinhvien['GioiTinh']; ?></td>
                <td><?php echo $sinhvien['malop'] ?? 'N/A'; ?></td>
                <td>
                <a href="/sinhvien/edit/<?php echo $sinhvien['id']; ?>" class="btn btn-primary">Sửa</a>
                <a href="/sinhvien/delete/<?php echo $sinhvien['id']; ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này không?')">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <div>
            <?php
            $pageSize = 5;
            for ($i = 1; $i <= $totalPages; $i++) {
            $offset = ($i - 1) * $pageSize;
            echo "<a href='/sinhvien/index/$pageSize/$offset' class='btn btn-success' style='margin-right: 5px; margin-top: 5px;'>$i</a>";
            }
            ?>
        </div>
</body>
</html>