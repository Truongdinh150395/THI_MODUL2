<?php

namespace Test\Controller;

use Test\Model\Product;
use Test\Model\ProductManager;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductManager();
    }

    function showProduct()
    {
        $products = $this->productModel->getAllProduct();
        include_once("src/View/list.php");
    }

    function addProduct()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET") {
            include_once("src/View/add.php");

        } else{
            $name = $_REQUEST["name"];
            $species = $_REQUEST["species"];
            $price = $_REQUEST["price"];
            $amount = $_REQUEST["amount"];
            $date = $_REQUEST["date"];
            $description = $_REQUEST["description"];
            $product = new Product($name, $species, $price, $amount, $date, $description);
            $this->productModel->addProduct($product);
            header("location:index.php");
        }
    }
    function deleteProduct()
    {
        $id = $_GET["id"];
        $this->productModel->deleteProduct($id);
        header("location:index.php");
    }
    function updateProduct()
    {
        if($_SERVER["REQUEST_METHOD"] =="GET"){
            $id = $_REQUEST["id"];
           $product = $this->productModel->getByProductId($id);

            include_once ("src/View/update.php");
        } else {
            $id = $_REQUEST["id"];
            $name = $_REQUEST["name"];
            $species = $_REQUEST["species"];
            $price = $_REQUEST["price"];
            $amount = $_REQUEST["amount"];
            $date = $_REQUEST["date"];
            $description = $_REQUEST["description"];
            $product = new Product($name,$price,$species,$amount,$date,$description);
            $product->setId($id);
            $this->productModel->updateProduct($product);
            header("location:index.php");
        }
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $search = "%" . $_REQUEST['search'] . "%";
            $outProduct = $this->productModel->search($search);
            include_once "src/View/search.php";
        }
    }
}
