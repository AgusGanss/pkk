<?php 

class category extends Controller{
    public function index(){
        $data ['judul'] = 'category';
        $this->view('Templates/header-admin', $data);
        $this->view('category/index');
        $this->view('Templates/footer-admin');
    }
    public function create(){
        $data ['judul'] = 'Add Product';
        $this->view('Templates/header-admin', $data);
        $this->view('category/create');
        $this->view('Templates/footer-admin');
    }
    public function edit(){
        $data ['judul'] = 'Edit Product';
        $this->view('Templates/header-admin', $data);
        $this->view('category/edit');
        $this->view('Templates/footer-admin');
    }
}

?>