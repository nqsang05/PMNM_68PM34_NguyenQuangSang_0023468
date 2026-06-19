<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2><?php echo $data['title']; ?></h2>
            <form action="/lophoc/update/<?php echo $data['lophoc']['id']; ?>" method="POST">
                <div class="mb-3">
                    <label for="malop" class="form-label">Mã lớp</label>
                    <input type="text" class="form-control" id="malop" name="malop" value="<?php echo $data['lophoc']['malop']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="tenlop" class="form-label">Tên lớp</label>
                    <input type="text" class="form-control" id="tenlop" name="tenlop" value="<?php echo $data['lophoc']['tenlop']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="khoahoc" class="form-label">Khóa học</label>
                    <input type="text" class="form-control" id="khoahoc" name="khoahoc" value="<?php echo $data['lophoc']['khoahoc']; ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Cập nhật</button>
                <a href="/lophoc/index" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
</div>
