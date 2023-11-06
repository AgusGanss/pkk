<?php 
class product_model extends Controller{
    private $table='product';
    private $db;

    public function __construct()
    {
        $this->db=new Database;
    }

    public function getProduct(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function createProduct($data){
        $query= "INSERT INTO product 
                VALUES
                (:id, :product, :category, :price)";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('product', $data['product']);
        $this->db->bind('category', $data['category']);
        $this->db->bind('price', $data['price']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
?>