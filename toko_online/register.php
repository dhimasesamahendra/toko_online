<!DOCTYPE html>
<html>
<head>
    <title>FA SHOP | Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <style type="text/css">
        *{
            font-family: 'Quicksand', sans-serif;
        }
       #bg-reg {
            background-image: url("css/img/4.png");
       } 
       a{
            display: inline-block;
            text-decoration: none;
            text-align: center;
            width: 236px;
            padding:8px 15px;
            background-color: #c70039;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 13px;
       }
       #bg-reg{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .box-reg{
            width: 300px;
            min-height: 200px;
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 15px;
            box-sizing: border-box;
        }
        .box-reg h2 {
            text-align: center;
            margin-bottom: 15px;
        }
        .btn {
            width: 265px;
            padding:8px 15px;
            background-color: #c70039;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .input-control {
            width: 265px;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
    </style>
</head>
 <body id="bg-reg">
    <div class="box-reg">
        <h3 align="center">Register</h3>
         <form action="proses_registrasi.php" method="post">
            <br>
            <input type="text" name="nama" value="" class="input-control" placeholder=" Nama Lengkap">
            <br>
            <input type="text" name="alamat" placeholder="Alamat" class="input-control">
            <br>
            <input type="text" name="telp" class="input-control" placeholder="Nomor Telepon">
            <br>
            <input type="text" name="username" value="" class="input-control" placeholder="Username">
            <br>
            <input type="password" name="password" value="" class="input-control" placeholder="Password">
            <br>
            <input type="submit" style="background-color: #24252A;" value="Register" class="btn">
            <br><br>
            <a href="login.php" style="background-color: #24252A;" >Login</a>
        </form>
    </div>
</body>
</html>