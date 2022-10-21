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
<html>
    <head>
        <title>Edit Customer Data</title>
    </head>
    <body>
        <a href="index.php">Home</a> <br> <br>

        <form action="edit_process.php" method="POST" name="update_user">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=<?= $name?>></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value=<?php echo $email;?>></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" value=<?php echo $phone;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>