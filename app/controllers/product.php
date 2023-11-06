<?php 

class product extends Controller{
    public function index(){
        $data ['judul'] = 'Product';
        $data['product']=$this->model('product_model')->getProduct();
        $this->view('Templates/header-admin', $data);
        $this->view('product/index',$data);
        $this->view('Templates/footer-admin');
    }
    public function create($data){
        $data ['judul'] = 'Product Create';
        if($this->model('product_model')->createProduct($_POST) > 0){
            header('Location: ' . BASEURL . ' /product');
            exit;
        }else{
            $this->view('Templates/header-admin', $data);
            $this->view('product/create',$data);
            $this->view('Templates/footer-admin');
        }
    }
    public function edit(){
        $data ['judul'] = 'Edit Product';
        $this->view('Templates/header-admin', $data);
        $this->view('product/edit');
        $this->view('Templates/footer-admin');
    }
}

?>