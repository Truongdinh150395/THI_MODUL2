<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lọc Danh sách</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
<h3>Danh sách sản phẩm</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th scope="col">Name</th>
        <th>Species</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Description</th>

    </tr>
    </thead>
    <tr>
        <?php foreach ($outProduct as $key => $value):?>
            <td><?php echo ++$key;?></td>
            <td><?php echo $value->getName();?></td>
            <td><?php echo $value->getSpecies();?></td>
            <td><?php echo $value->getPrice();?></td>
            <td><?php echo $value->getAmount();?></td>

            <td><?php echo $value->getDescription();?></td>
        <?php endforeach; ?>
    </tr>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
<table>

</table>
