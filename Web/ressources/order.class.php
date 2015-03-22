<?php
class stock
{
    private $id;
    private $user_id;
    private $date;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        
        return $this;
    }
    
    public function getUser_id() {
        return $this->user_id;
    }
    
    public function setUser_id($user_id) {
        $this->user_id = $user_id;
        
        return $this;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function setDate($date) {
        $this->date = $date;
        
        return $this;
    }
    
    public function register($connect, $orderlist) {
        $date = date('Y-m-d');
        $orderquery = "INSERT INTO order VALUE ('',/*INSERT USER ID*/," . $date . ");";
        mysqli_query($connect, $orderquery);
        $orderid = mysqli_insert_id();
        $listquery = "INSERT INTO order VALUE ";
        foreach ($orderlist as $orderdetails) {
            
            //INSERT ORDERDETAILS
            $listquery = $listquery."('',".$orderdetails->getAmount().",".$orderdetails->getStock_id().",".$orderid.",null)";
            
        }
        $listquery = $listquery.';';
        mysqli_query($connect, $listquery);
    }
}
?>