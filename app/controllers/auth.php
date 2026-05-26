<?php
    session_start();
    class auth{
        protected $user=[
            'admin' => '123',
            'sang' => '456'
        ];
        public function login() {
            if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'] ?? '';
                $password = $_POST['password'] ?? '';
                if (isset($this->user[$username]) && $this->user[$username] === $password) {
                    $_SESSION['username'] = $username;
                    header('Location: /PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=home/index');
                    exit();
                } else {
                    header('Location: /PMNM_68PM34_NguyenQuangSang_0023468/public/index.php?url=home/login');
                    exit();
                }
            }
        }
    }