<?php
include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn_db, "SELECT * FROM customers WHERE id=$id");
if(!$result){
    header("Location:index.php");
}
while($customer_data = mysqli_fetch_array($result)){
    $name = $customer_data['name'];
    $email =$customer_data['email'];
    $phone =$customer_data['phone'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Customer Data</title>
</head>
    <body style="padding : 50px">
        <a href="index.php" style="float: right"><button type="button" class="btn btn-outline-primary">Home</button></a> <br> <br>

        <form action="edit_process.php" method="POST" name="update_user">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value=<?= $name?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="number" class="form-control" name="phone" value=<?php echo $phone;?>>
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <button  type="submit" name="update" value="Update" class="btn btn-primary" style="float : right">Update</button>
        </form>
    </body>
</html>