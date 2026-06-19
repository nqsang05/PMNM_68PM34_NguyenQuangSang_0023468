<?php
require_once "../app/core/controller.php";
class lophoc extends Controller
{
  public function index($limit = 5, $offset = 0, $search = "")
  {
    $lophocModel = $this->model('LophocModel');

    $result = $lophocModel->paging($limit, $offset, $search);
    $lophocs = $result['lophocs'];
    $totalPages = $result['totalPages'];

    $this->view('layout/masterLayout', ['viewname' => 'lophoc/index', 'lophocs' => $lophocs, 'title' => 'Danh sách lớp học', 'totalPages' => $totalPages]);
  }

    public function create()
  {
    require_once "../app/views/lophoc/create.php";
  }

  public function store()
  {
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
      $malop = $_POST['malop'];
      $tenlop = $_POST['tenlop'];
      $khoahoc = $_POST['khoahoc'];

      $lophocModel = $this->model('LophocModel');
      $result = $lophocModel->create($malop, $tenlop, $khoahoc);
      if ($result) {
        header("Location: /lophoc/index");
        exit();
      } else {
        echo "Thêm mới lớp học thất bại!";
        exit();
      }
    }
  }

  public function edit($id)
  {
    $id = (int)$id;
    $lophocModel = $this->model('LophocModel');
    $lophoc = $lophocModel->getLophocById($id);

    if (!$lophoc) {
      echo "Lớp học không tồn tại!";
      exit();
    }

    $this->view('layout/masterLayout', ['viewname' => 'lophoc/edit', 'lophoc' => $lophoc, 'title' => 'Sửa thông tin Lớp học']);
  }

  public function update($id)
  {
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = (int)$id;
      $malop = $_POST['malop'];
      $tenlop = $_POST['tenlop'];
      $khoahoc = $_POST['khoahoc'];

      $lophocModel = $this->model('LophocModel');
      $result = $lophocModel->update($id, $malop, $tenlop, $khoahoc);

      if ($result) {
        header("Location: /lophoc/index");
        exit();
      } else {
        echo "Cập nhật lớp học thất bại!";
        exit();
      }
    }
  }

  public function delete($id)
  {
    $id = (int)$id;
    $lophocModel = $this->model('LophocModel');
    $result = $lophocModel->delete($id);

    if ($result) {
      header("Location: /lophoc/index");
      exit();
    } else {
      echo "Xoá lớp học thất bại!";
      exit();
    }
  }
}
?>
