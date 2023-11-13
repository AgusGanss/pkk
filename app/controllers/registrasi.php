<?php

class Registrasi extends Controller {

   public function index() {
    $data ['judul'] = 'Registrasi';
    $this->view('templates/header', $data);
    $this->view ('registrasi/index');
    $this->view('templates/footer');
   }

   public function tambah(){
      if($this->model('registrasi_model')->tambahdataUser($_POST) > 0){
         header('Location:' .BASEURL. '/login');
         exit;
     }
  }
}
?>