<?php 

class stock extends Controller{
    public function index(){
        $data ['judul'] = 'Stock';
        $data['stock']=$this->model('stock_model')->getStock();
        $this->view('Templates/header-admin', $data);
        $this->view('stock/index',$data);
        $this->view('Templates/footer-admin');
    }
    public function create(){
        if($this->model('stock_model')->createStock($_POST) > 0){
            header('Location: ' . BASEURL . ' /stock');
            exit;
        }else{
            header('Location: ' . BASEURL . ' /stock');
            exit;
        }
    }
    public function edit(){
        $data ['judul'] = 'Edit Stock';
        $this->view('Templates/header-admin', $data);
        $this->view('stock/edit');
        $this->view('Templates/footer-admin');
    }
    public function delete($id){
        if($this->model('stock_model')->deleteStock($id) > 0){
            header('Location: ' . BASEURL . ' /stock');
            exit;
        }
    }
}

?>