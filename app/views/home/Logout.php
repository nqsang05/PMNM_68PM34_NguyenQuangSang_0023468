<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
session_destroy();
header('Location: /PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=home/login');
exit();
?>