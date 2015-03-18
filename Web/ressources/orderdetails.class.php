<?php
class stock
{
    private $id;
    private $amount;
    private $stock_id;
    private $order_id;
    private $price;

    public function getId()
    {
        return $this->id;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function getStock_id()
    {
        return $this->stock_id;
    }

    public function setStock_id($stock_id)
    {
        $this->stock_id = $stock_id;

        return $this;
    }

    public function getOrder_id()
    {
        return $this->order_id;
    }

    public function setOrder_id($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
?>