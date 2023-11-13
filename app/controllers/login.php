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
            $user = $userModel->getUsersById($email);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['level'] = $user['level'];

                    if ($user['level'] === 'admin') {
                        header('Location: ' . BASEURL . '/product');
                    } elseif($user['level'] === 'user') {
                        header('Location: ' . BASEURL);
                    }else {
                        echo 'error';
                    }

                    exit;
                } 
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