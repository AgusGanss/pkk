<?php 

class stock extends Controller{
    public function index(){
        $data ['judul'] = 'Stock';
        $this->view('Templates/header-admin', $data);
        $this->view('stock/index');
        $this->view('Templates/footer-admin');
    }
    public function create(){
        $data ['judul'] = 'Add Stock';
        $this->view('Templates/header-admin', $data);
        $this->view('stock/create');
        $this->view('Templates/footer-admin');
    }
    public function edit(){
        $data ['judul'] = 'Edit Stock';
        $this->view('Templates/header-admin', $data);
        $this->view('stock/edit');
        $this->view('Templates/footer-admin');
    }
}

?>