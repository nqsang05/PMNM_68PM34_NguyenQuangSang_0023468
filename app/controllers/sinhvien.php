<?php
require_once '../app/core/Controller.php';
class sinhvien extends Controller {
    function index() {
        $sinhvienModel = $this->model('sinhvienModel');
        $sinhvien = $sinhvienModel -> getAllSinhvien();

        $this -> view('sinhvien/index', ['sinhvien' => $sinhvien]);
    }

    function create() {
        require_once '../app/views/sinhvien/create.php';
    }
}