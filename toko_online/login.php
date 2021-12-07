<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FA SHOP | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <style type="text/css">
        *{
            font-family: 'Quicksand', sans-serif;
        }
       #bg-login {
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
       #bg-login{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .box-login{
            width: 300px;
            min-height: 200px;
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 15px;
            box-sizing: border-box;
        }
        .box-login h2 {
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
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" class="input-control">
            <br>
            <input type="password" name="password" placeholder="Password" class="input-control">
            <br>
            <input type="submit" name="login" style="background-color: #24252A;" placeholder="Login" class="btn" value="Login">
            <br><br>
            <a href="register.php" style="background-color: #24252A;">Register</a>
        </form>
    </div>
</body>
</html>