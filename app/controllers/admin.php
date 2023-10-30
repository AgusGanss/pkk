<?php 

class admin extends Controller{
    public function index(){
        $data ['judul'] = 'Product';
        $this->view('templates/header', $data);
        $this->view('admin/index');
        $this->view('templates/footer');
    }
    public function create(){
        $data ['judul'] = 'Add Product';
        $this->view('templates/header', $data);
        $this->view('admin/create');
        $this->view('templates/footer');
    }
    public function edit(){
        $data ['judul'] = 'Edit Product';
        $this->view('templates/header', $data);
        $this->view('admin/edit');
        $this->view('templates/footer');
    }
}

?>