<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body {
        background-color: lightskyblue;
    }
    .table {
        background-color: white;
    }
</style>
<body>
<a class="btn btn-success" href="index.php?page=add-product">Thêm Mặt Hàng</a>
<form method="POST" action="index.php?page=search">
    <input name="search" placeholder="Nhap tu muon tim" type="search">

    <button style="background-color:blue"  type="submit">Tìm kiếm</button>
</form>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th scope="col">Name</th>
        <th>Species</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <?php foreach ($products as $key => $product):?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $product->getName();?></td>
            <td><?php echo $product->getSpecies();?></td>
            <td><?php echo $product->getPrice();?></td>
            <td><?php echo $product->getAmount();?></td>
<!--            <td>--><?php //echo $product->getDate();?><!--</td>-->
            <td><?php echo $product->getDescription();?></td>
            <td>
                <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá không?')", href="index.php?page=delete-product&id=<?php echo $product->getId(); ?>">Delete</a>
                <a class="btn btn-dark" href="index.php?page=edit-product&id=<?php echo $product->getId(); ?>">Edit</a>
            </td>


        </tr>
    <?php endforeach;?>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>