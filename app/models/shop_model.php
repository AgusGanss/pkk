<?php
class shop_model{
   
   private $table = "product";
   private $db;

   public function __construct()
   {
    $this->db = new database;
   }

   public function getAllProductdata()
   {
       $this->db->query('SELECT * FROM ' . $this ->table);
       return $this->db->resultSet();
   }

   public function getProductById($id_product)
   {
       $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id_product' );
       $this->db->bind('id', $id_product);
       return $this->db->single();
   }   

}
?>