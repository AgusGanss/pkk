<?php
    class registrasi_model{
        private $table = 'user';
        private $db;

        public function __construct() {
            $this->db = new Database;
         }

         public function tambahdataUser($data) {
            $query = "INSERT INTO user VALUES
            (:id, :level, :name, :username, :alamat, :email, :password)";

            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('name', $data['name']);
            $this->db->bind('username', $data['username']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('password', $data['password']);
            $this->db->bind('level', $data['level']="user");

            $this->db->execute();

            return $this->db->rowCount();
         }

         public function getUsersById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
         }

         public function cekEmailPassword($email, $password) {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email');
            $this->db->bind(':email', $email);
            $user = $this->db->single();
            
        }
        
        
         
         

     
    }

    
   

?>