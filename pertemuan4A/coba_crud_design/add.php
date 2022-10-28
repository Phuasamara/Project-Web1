<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add Customer</title>
</head>
    <body style="padding : 50px">
        <a href="index.php" style="float: right"><button type="button" class="btn btn-outline-primary">Go To Home Page</button></a> <br> <br>
        <form action="add_process.php" method="POST" name="form1">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Masukkan nama anda...">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan email anda...">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="number" class="form-control" name="phone" placeholder="Masukkan telepon anda...">
            </div>
            <button  type="submit" name="Submit" value="Add" class="btn btn-primary" style="float : right">Add</button>
        </form>
    </body>
</html>