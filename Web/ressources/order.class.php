<?php
class order
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
    
    static function register($connect, $orderlist, $userid) {
        $date = date('Y-m-d');
        $orderquery = "INSERT INTO `m2l-interne`.`order` (`user_id`, `date`) VALUES ('".$userid."','" . $date . "');";
        mysqli_query($connect, $orderquery);


        $orderid = mysqli_insert_id($connect);
        $listquery = "INSERT INTO `m2l-interne`.`orderlist` (`amount`, `stock_id`, `order_id`) VALUES";
        foreach ($orderlist as $orderdetails) {
            //INSERT ORDERDETAILS
            $listquery = $listquery."('".$orderdetails['amount']."','".$orderdetails['id']."','".$orderid."'),";
            
        }
        $listquery = substr($listquery, 0, -1);
        $listquery = $listquery.';';
        mysqli_query($connect, $listquery);
    }

    static function history($connect, $user_id){
        $query = "SELECT o.id, o.date, SUM(d.price) as price FROM `order` o
                JOIN orderlist d ON o.id = d.order_id
                WHERE o.user_id =".$user_id."
                GROUP BY o.id;";
        $list = mysqli_query($connect, $query);
        return $list;
    }
}
?>