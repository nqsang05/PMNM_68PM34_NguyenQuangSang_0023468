<?php
class middleware {
    public static function checkAuth() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (!isset($_SESSION['username'])) {
            header('Location: index.php?url=auth/login');
            exit();
        }
    }

    public static function checkAdmin() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (!isset($_SESSION['username'])) {
            header('Location: index.php?url=auth/login');
            exit();
        }
        
        if ($_SESSION['role'] !== 'admin') {
            header('Location: index.php?url=home');
            exit();
        }
    }
}
?>