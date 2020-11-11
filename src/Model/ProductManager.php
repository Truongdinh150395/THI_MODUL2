<?php


namespace Test\Model;


use Test\Model\Product;

class ProductManager
{
    protected $DBConnect;
    public function __construct()
    {
        $conn = new DBConnect();
        $this->DBConnect = $conn->connect();
    }
    function getAllProduct()
    {
        $sql = "SELECT * FROM `products`";
        $stmt = $this->DBConnect->query($sql);
        $data = $stmt->fetchAll();
        $products = [];
        foreach ($data as $item){
            $product = new Product($item["name"],$item["species"],$item["price"],$item["amount"],$item["date"],$item["description"]);
            $product->setId($item["id"]);
            array_push($products,$product);
        }
        return $products;
    }
    function addProduct($product)
    {
        $sql = "INSERT INTO `products`(`name`, `species`, `price`, `amount`, `date`, `description`) VALUES (:name,:species,:price,:amount,:date,:description)";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':name',$product->getName());
        $stmt->bindParam(':species',$product->getSpecies());
        $stmt->bindParam(':price',$product->getPrice());
        $stmt->bindParam(':amount', $product->getAmount());
        $stmt->bindParam(':date',$product->getDate());
        $stmt->bindParam(':description',$product->getDescription());
        $stmt->execute();
    }
    function deleteProduct($id)
    {
        $sql = "DELETE FROM `products` WHERE id=:id";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }
    function getByProductId($id)
    {
        $sql = "SELECT * FROM `products` WHERE id =:id";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;

    }
    function updateProduct($product)
    {
        $sql ="UPDATE `products` SET `name`=:name,`species`=:species,`price` = :price, `amount` = :amount, `date` = :date , `description` = :description WHERE id =:id";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':name',$product->getName());
        $stmt->bindParam(':species',$product->getSpecies());
        $stmt->bindParam(':price',$product->getPrice());
        $stmt->bindParam(':amount', $product->getAmount());
        $stmt->bindParam(':date',$product->getDate());
        $stmt->bindParam(':description',$product->getDescription());
        $stmt ->bindParam(':id',$product->getId());
        $stmt->execute();
    }
    public function search($key)
    {
        $sql = "SELECT * FROM `products` WHERE name LIKE :key";
        $stmt= $this->DBConnect->prepare($sql);
        $stmt->bindParam(":key", $key);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $item) {
            $product = new Product($item["name"],$item["species"],$item["price"],$item["amount"],$item["date"],$item["description"]);
            $product->setId($item['id']);
            array_push($arr, $product);
        }
        return $arr;
    }
}