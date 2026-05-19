<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
class auth {
    protected $user = [
            "Sang@gmail.com"=>["password"=>"123", "role"=>"student"],
            "Admin"=>["password"=>"456", "role"=>"admin"]
    ];

    public function login() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            
            if(isset($this->user[$username]) && $this->user[$username]["password"] == $password) {
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $this->user[$username]["role"];
                header("Location: index.php?url=home");
                exit();
            } else {
                $error = "Tài khoản hoặc mật khẩu không chính xác!";
                require_once '../app/views/auth/Login.php';
                return;
            }
        }
        require_once '../app/views/auth/Login.php';
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        header('Location: index.php?url=auth/login');
        exit();
    }
}
?>