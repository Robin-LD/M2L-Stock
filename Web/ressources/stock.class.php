<?php
class stock
{
    private $id;
    private $nom;
    private $amount;
    private $price;
    private $stock_type_id;
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
        
        return $this;
    }

    public function getNom() {
        return $this->nom;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
        
        return $this;
    }
    
    public function getAmount() {
        return $this->amount;
    }
    
    public function setAmount($amount) {
        $this->amount = $amount;
        
        return $this;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function setPrice($price) {
        $this->price = $price;
        
        return $this;
    }
    
    public function getStock_type_id() {
        return $this->stock_type_id;
    }
    
    public function setStock_type_id($stock_type_id) {
        $this->stock_type_id = $stock_type_id;
        
        return $this;
    }
    
    static function getStockList($connect) {
        $getlistquery = "SELECT * FROM Stock";
        $stocklistresult = mysqli_query($connect, $getlistquery);
        return $stocklistresult;
    }
    
    static function sell($stockid, $amount, $connect) {
        $sellquery = "UPDATE stock SET amount = amount - " . $amount . " WHERE id = " . $stockid;
        $sell = mysqli_query($sellquery, $connect);
    }
}
?>