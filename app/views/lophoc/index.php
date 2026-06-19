<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $data['title']; ?></h2>
            <a href="/lophoc/create" class="btn btn-primary mb-3">Thêm mới lớp học</a>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mã lớp</th>
                        <th>Tên lớp</th>
                        <th>Khóa học</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['lophocs'] as $lophoc) : ?>
                        <tr>
                            <td><?php echo $lophoc['id']; ?></td>
                            <td><?php echo $lophoc['malop']; ?></td>
                            <td><?php echo $lophoc['tenlop']; ?></td>
                            <td><?php echo $lophoc['khoahoc']; ?></td>
                            <td>
                                <a href="/lophoc/edit/<?php echo $lophoc['id']; ?>" class="btn btn-warning btn-sm">Sửa</a>
                                <a href="/lophoc/delete/<?php echo $lophoc['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Pagination -->
            <nav>
                <ul class="pagination">
                    <?php for ($i = 1; $i <= $data['totalPages']; $i++) : ?>
                        <li class="page-item"><a class="page-link" href="/lophoc/index?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
