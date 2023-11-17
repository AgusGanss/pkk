<?php
class Login extends Controller{
 
    public function index(){
        $data ['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view ('login/index');
        
    }

    public function prosesLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $userModel = $this->model('registrasi_model');
            $user = $userModel->cekEmailPassword($email, $password);
    
            if ($user) {
                // Sesuaikan data sesi sesuai kebutuhan
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['level'] = $user['level'];
    
                // Redirect sesuai level user
                if ($user['level'] === 'admin') {
                    header('Location: ' . BASEURL . '/product');
                } else {
                    header('Location: ' . BASEURL);
                }
                exit;
            } else {
                echo 'Invalid email or password';
                var_dump($email);
                var_dump($password);
            }
        }
    }
    

    public function prosesLogout()
    {
        session_start();
        session_destroy();

        header('Location: ' . BASEURL . '/login');
        exit();
    }

   

}

?>