<?php 

class product extends Controller{
    public function index(){
        $data ['judul'] = 'Product';
        $data['product']=$this->model('product_model')->getProduct();
        $this->view('Templates/header-admin', $data);
        $this->view('product/index',$data);
        $this->view('Templates/footer-admin');
    }
    public function create(){
        if($this->model('product_model')->createProduct($_POST) > 0){
            header('Location: ' . BASEURL . ' /product');
            exit;
        }else{
            header('Location: ' . BASEURL . ' /product');
            exit;
        }
    }
    public function edit(){
        if($this->model('product_model')->EditProduct($_POST) > 0){
            header('Location: ' . BASEURL . ' /product');
            exit;
        }else{
            header('Location: ' . BASEURL . ' /product');
            exit;
        }
    }
    public function delete($id){
        if($this->model('product_model')->deleteProduct($id) > 0){
            header('Location: ' . BASEURL . ' /product');
            exit;
        }
    }
}

?>