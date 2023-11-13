<?php
class shop extends Controller
{
    public function index()
    {
        $data['judul'] = 'Shop';
        $data['product'] = $this->model('shop_model')->getAllProductdata();
        $data['category']=$this->model('category_model')->getCategory();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('shop/shop', $data);
        $this->view('templates/footer');
    }

    public function items()
    {
        $data['judul'] = 'Shop';
        $data['product'] = $this->model('shop_model')->getAllProductdata();
        $data['category']=$this->model('category_model')->getCategory();
        $this->view('templates/items-header', $data);
        $this->view('templates/navbar');
        $this->view('shop/items', $data);
        $this->view('templates/footer');
    }
}
