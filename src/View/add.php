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
<!--<form method="POST">-->
<!--    <input  name="name" placeholder="nhap ten">-->
<!--    <input  name="species" placeholder="nhap Loại hàng">-->
<!--    <input  name="price" placeholder="nhap gia">-->
<!--    <input  name="amount" placeholder="Nhập số lượng">-->
<!--    <input  name="date" placeholder="Nhập ngày">-->
<!--    <input  name="description" placeholder="Nhập mô tả">-->
<!--    <input type="submit" name="btn-sm" value="ADD">-->
<!--</form>-->
<form method="POST">
    <table align="center">
        <tr>
            <td>Name</td>
            <td><input  name="name" placeholder="nhap ten"></td>
        </tr>
        <tr>
            <td>Loai Hang</td>
            <td> <input  name="species" placeholder="nhap Loại hàng"></td>
        </tr>
        <tr>
            <td>Gia</td>
            <td> <input  name="price" placeholder="nhap gia"></td>
        </tr>
        <tr>
            <td>So Luong</td>
            <td><input  name="amount" placeholder="Nhập số lượng"></td>
        </tr>
        <tr>
            <td>Ngay</td>
            <td><input  name="date" placeholder="Nhập ngày"></td>
        </tr>
        <tr>
            <td>Mo ta</td>
            <td><input  name="description" placeholder="Nhập mô tả"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="btn-sm" class="btn btn-primary">Submit</button></td>
        </tr>

    </table>
</form>
<!--   -->

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
