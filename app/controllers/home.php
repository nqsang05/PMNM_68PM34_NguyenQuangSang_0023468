<?php
require_once '../app/middleware.php';

class home {
    public function index() {
        Middleware::checkAuth();
        require_once '../app/views/auth/Dashboard.php';
    }
}
?>