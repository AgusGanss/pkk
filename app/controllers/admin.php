<?php 

class admin extends Controller{
    public function index(){
        $data ['judul'] = 'Manage Product';
        $this->view('templates/header', $data);
        $this->view('admin/index');
        $this->view('templates/footer');
    }
    public function create(){
        $data ['judul'] = 'Manage Product';
        $this->view('templates/header', $data);
        $this->view('admin/create');
        $this->view('templates/footer');
    }
}

?>