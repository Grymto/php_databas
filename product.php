<?php

class Product
{
    protected $id = null;
    protected $name = null;
    protected $price = null;
    protected $sku = null;

    public function __construct($id,$name,$price,$sku)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->$sku = $sku;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($value)
    {
        if ($value > 0) {
            $this->price = $value;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($value)
    {
        $this->sku = $value;
    }
    function print(){
        echo "id " . $this->id. " name:" . $this->name. " price:" . $this->price. " sku:" . $this->sku;
    }
}

function getProduct($connection, $sku)
{
    $query = "SELECT * FROM untitled_table_5 WHERE sku = '" .$sku ."'" ;
    $statement = $connection->query($query);
    // $statement->bind_param("s", $sku);
    
    $result = $statement ->fetch_assoc();

    if($result != null ){

    $id = $result["id"];
    $name = $result["name"];
    $price = $result["price"];
    $product = new product($id,$name,$price,$sku);

    return $product;
    }
    else{
        echo 'pruducten kunde inte hittas!';
        return null;
    }

}

?>