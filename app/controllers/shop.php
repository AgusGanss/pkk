<?php
class shop extends Controller
{
    public function index()
    {
        $data['judul'] = 'Shop';
        $data['product'] = $this->model('shop_model')->getAllProductdata();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('shop/shop', $data);
        $this->view('templates/footer');
    }
}
