<?php 
class stock_model extends Controller{
    private $table='stock';
    private $db;

    public function __construct()
    {
        $this->db=new Database;
    }

    public function getStock(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function createStock($data){
        $query= "INSERT INTO stock 
                VALUES
                (:product_id, :product, :stock, :tanggal)";

        $this->db->query($query);
        $this->db->bind('product_id', $data['product_id']);
        $this->db->bind('product', $data['product']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('tanggal', $data['tanggal']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function updateStock($data){
        $query= "UPDATE stock V:id, :product_id, :stock, :tanggal)";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('product_id', $data['product_id']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('tanggal', $data['tanggal']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteStock($product_id){
        $query="DELETE FROM stock WHERE product_id = :product_id ";
        $this->db->query($query);
        $this->db->bind('product_id',$product_id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }
}
?>