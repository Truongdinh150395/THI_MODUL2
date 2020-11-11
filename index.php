<?php
require __DIR__."/vendor/autoload.php";
$productController = new \Test\Controller\ProductController();
$page = isset($_REQUEST["page"])? $_REQUEST["page"]: NULL;
switch ($page) {
    case "add-product":
        $productController->addProduct();
        break;
    case "delete-product":
        $productController->deleteProduct();
        break;
    case "edit-product":
        $productController->updateProduct();
        break;
    case "search":
        $productController->search();
        break;
    default:
        $productController->showProduct();
}