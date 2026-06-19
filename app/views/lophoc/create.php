<?php $this->view('layout/masterLayout', ['viewname' => 'lophoc/create', 'title' => 'Thêm mới lớp học']); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Thêm mới lớp học</h2>
            <form action="/lophoc/store" method="POST">
                <div class="mb-3">
                    <label for="malop" class="form-label">Mã lớp</label>
                    <input type="text" class="form-control" id="malop" name="malop" required>
                </div>
                <div class="mb-3">
                    <label for="tenlop" class="form-label">Tên lớp</label>
                    <input type="text" class="form-control" id="tenlop" name="tenlop" required>
                </div>
                <div class="mb-3">
                    <label for="khoahoc" class="form-label">Khóa học</label>
                    <input type="text" class="form-control" id="khoahoc" name="khoahoc" required>
                </div>
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="/lophoc/index" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
</div>
