<?php 

class category extends Controller{
    public function index(){
        $data ['judul'] = 'Category';
        $data['category']=$this->model('category_model')->getCategory();
        $this->view('Templates/header-admin', $data);
        $this->view('category/index',$data);
        $this->view('Templates/footer-admin');
    }
    public function create(){
        if($this->model('category_model')->createCategory($_POST) > 0){
            header('Location: ' . BASEURL . ' /category');
            exit;
        }
    }
    public function delete($id){
        if($this->model('category_model')->deleteCategory($id) > 0){
            header('Location: ' . BASEURL . ' /category');
            exit;
        }
    }
}

?>