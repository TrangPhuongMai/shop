<?php
class post {
    private $db;

    public function __construct(){
    $this->db = new Database;    
    }

    public function getproduct(){
        $this->db->query('SELECT * FROM products');
        
        $results = $this->db->resultSet();
        return $results;
    
    }
     public function addproduct($data){
        $this->db->query('INSERT INTO products (name,catid,price,descripton) VALUES (:name,:catid,:price,:descripton)');

        $this->db->bind(':name',$data['name']);
        $this->db->bind(':catid',$data['catid']);
        $this->db->bind(':price',$data['price']);
        $this->db->bind(':descripton',$data['descripton']);
        
        if ($this->db->execute()){
            return True;
        }
        else{
            return False;   
        }
    
    }

    public function updateproduct($data){
        echo '************************************************';
        $this->db->query('UPDATE products SET name = :name, catid = :catid, price = :price, descripton = :descripton WHERE id = :id;');

        $this->db->bind(':id',$data['id']);
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':catid',$data['catid']);
        $this->db->bind(':price',$data['price']);
        $this->db->bind(':descripton',$data['descripton']);
        
        if ($this->db->execute()){
            return True;
        }
        else{
            return False;   
        }
    
    }

    public function getProductsById($id){
        $this->db->query('SELECT * FROM products WHERE id = :id;');
        $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
       
    }
    
    public function deleteproduct($id){
        $this->db->query('DELETE FROM products WHERE id = :id');
        $this->db->bind(':id', $id);
        
        if ($this->db->execute()){
            return True;
        }
        else{
            return False;   
        }

    }


}


?>