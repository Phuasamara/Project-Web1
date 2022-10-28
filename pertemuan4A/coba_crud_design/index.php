<?php
include_once("config.php");
$query = "SELECT * FROM customers ORDER BY id DESC";
$result = mysqli_query($conn_db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Home Page</title>
</head>
<body style="padding : 30px">
<a href="add.php" style="float: right"><button type="button" class="btn btn-outline-primary">Add New Customer</button></a><br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Join Date</th>
      <th scope="col">Last Update</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if($result->num_rows > 0): ?>
        <?php while($customer_data = mysqli_fetch_array($result)) : ?>
    <tr>
        <td scope="row"><?php echo $customer_data['name']?></td>
        <td><?php echo $customer_data['phone']?></td>
        <td><?php echo $customer_data['email']?></td>
        <td><?= $customer_data['created']?></td>
        <td><?= $customer_data['updated']?></td>
        <td>
        <a href='edit.php?id=<?=$customer_data["id"]?>'><button type="button" class="btn btn-outline-success">Edit</button></a>
        <a href='delete.php?id=<?=$customer_data["id"]?>'><button type="button" class="btn btn-outline-danger">Delete</button></a>
        </td>
    </tr>
    <?php endwhile; ?>
      <?php else : ?>
    <tr>
      <td colspan="6" rowspan="1" headers="" align="center">Data Customer tidak ditemukan !</td>
    </tr>
      <?php endif; ?>
      <?php mysqli_free_result($result); ?>
  </tbody>
</table>

    <?php if(isset($_GET["message"])){
        $message = $_GET["message"];
        echo "<script type='text/javascript'>alert('$message');";
        echo "window.location='index.php'<?script>";
    }
    ?>
</body>
</html>