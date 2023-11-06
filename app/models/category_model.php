<?php 
class category_model extends Controller{
    private $table='category';
    private $db;

    public function __construct()
    {
        $this->db=new Database;
    }

    public function getCategory(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function createCategory($data){
        $query= "INSERT INTO category 
                VALUES
                (:id, :category)";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('category', $data['category']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function deleteCategory($id){
        $query="DELETE FROM category WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }
}
?>