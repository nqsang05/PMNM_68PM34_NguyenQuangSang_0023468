<?php
require_once '../app/middleware.php';

class sinhvien {
    public function index() {
        Middleware::checkAuth();
        require_once '../app/views/sinhvien/index.php';
    }
    
    public function create() {
        Middleware::checkAdmin();
        require_once '../app/views/sinhvien/create.php';
    }
}
?>