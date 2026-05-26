<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
class middleware {
    function checklogin() {
        // Get URL từ query string ?url=
        $url = isset($_GET['url']) ? $_GET['url'] : '';
        $publicPages = ['home/login', 'auth/login'];
        
        // Nếu chưa login và không phải trang public, redirect tới login
        if (!isset($_SESSION['username']) && !in_array($url, $publicPages)) {
            header('Location: /PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=home/login');
            exit();
        }
    }
}
?>