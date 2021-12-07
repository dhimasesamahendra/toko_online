<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <style type="text/css">
        * {
            font-family: 'Quicksand', sans-serif;

        }
        li, a, button {
            font-family: 'Quicksand', sans-serif;
            font-weight: 500;
            font-size: 16px;
            color: #cdf0f1;
            text-decoration: none;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 10%;
            position: sticky;
            top: 0;
            z-index: 2;
            border-bottom: 1px solid white;
        }
        .nav_links {
            list-style: none;
        }
        .nav_links li {
            display: inline-block;
            padding: 0px 20px;
        }
        .nav_links li a {
            transition: all 0.3s ease 0s;
        }
        .nav_links li a:hover {
            color: #0088a6;
        }
        button {
            padding: 9px 25px;
            background-color: rgba(0, 136, 169, 1);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }
        button:hover {
            background-color: rgba(0, 136, 169, 0.8);
        }
    </style>
</head>
<body>
    <header style="background-color: #24252A;">
        <h3 style="color: white;"><b>Breng Shop</b></h3>
        <nav>
            <ul class="nav_links">
                <li><a href="home.php">Home</a></li>
                <li><a href="myOrder.php">My Order</a></li>
                <li><a href="account.php">Account</a></li>
                <li><a href="tambah_produk.php">Tambah Produk</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
        </nav>
        <a href="login.php"><button>Log Out</button></a>
    </header>
</html>