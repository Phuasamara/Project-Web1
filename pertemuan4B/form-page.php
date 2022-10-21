<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        input[type=text], select{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit]{
            width:10%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover{
            background-color: #45a049;
        }
        div{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding:20px;
        }
        .kotakform{
            width: 80%;
            margin:20px auto 20px auto;
        }
        h1{
            text-align: center;
            margin: 80px auto 80px auto;
        }
    </style>
</head>
<body>
    <h1>DATA PESERTA DIDIK</h1>
    <div class="kotakform">
        <form action="form.php" method="POST">
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" placeholder="masukkan nis anda">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" id="name" placeholder="masukkan nama lengkap anda">
            <label for="addr">Alamat</label>
            <input type="text" name="alamat" id="addr" placeholder="masukkan alamat anda">
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas">
                <option value="11">XI</option>
                <option value="12">XII</option>
            </select>
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan">
                <option value="MM">Multimedia</option>
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>