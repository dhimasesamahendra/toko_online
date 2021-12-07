<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Breng Shop | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <style type="text/css">
        *{
            font-family: 'Quicksand', sans-serif;   
        }
        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            z-index: 1;
        }
        .product-grid{
            height: 350px;
            width: 300px;
            margin: 10px;
            text-align: center;
        }
        .product-grid .product-image{
            border: 2px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
        }
        .product-grid:hover .product-image{border-color: #693593;}

        .product-grid .product-image a.image{display: block;}

        .product-grid .product-image img{
            width: 100%;
            height: 100%;
            transition: all 0.5s ease 0s;
        }
        .product-grid:hover .product-image img{
            transform: scale(1.2);
        }
        .product-grid .hot-label{
            color: #fff;
            background: #ff3859;
            font-size: 14px;
            text-transform: uppercase;
            line-height: 48px;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            position: absolute;
            top: 10px;
            right: 10px;
            font-weight: 700;
            text-align: center;
        }
        .product-grid .links{
            font-size: 0;
            background: #693593;
            width: 100%;
            padding: 10px 0px;
            margin: 0;
            list-style: none;
            opacity: 0;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 1;
            transition: all 0.4s ease 0s;
        }
        .product-grid:hover .links{opacity: 1;}

        .product-grid .links li{
            padding: 0 10px;
            border-right: 1px solid rgba(255, 255, 255, 0.5);
            display: inline-block;
        }
        .product-grid .links li:last-child{border: none;}
        .product-grid .links li a{
            color: #fff;
            font-size: 16px;
            position: relative;
            transition: all 0.3s ease 0s;   
        }
        body{
            background-color: #24252A;
        }
        button {
            padding: 1px 25px;
            background-color: rgba(0, 136, 169, 1);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }
        button:hover {
            background-color: rgba(0, 136, 169, 0.8);
        }
        .product-content{
            color: white;
        }
    </style>
</head>
<body>
    <?php
    include "header.php";
    include "koneksi.php";
    $qry_produk=mysqli_query($conn,"select * from produk");
    ?>
    <br><br><h1 align="center" style="color: white;">Daftar Barang</h1><br><br><hr>
    <?php
    while($dt_produk=mysqli_fetch_array($qry_produk)){
    ?>
    <div class="wrapper">
        <div class="product-grid">
            <div class="product-image">
                <a href="quickview.php?id_produk=<?=$dt_produk['id_produk']?>" class="image">
                    <img src="foto_produk/<?=$dt_produk['foto']?>">
                </a>
                <span class="hot-label">Hot</span>
            </div>
            <div class="product-content">
                <h3><?=$dt_produk['nama_produk']?></h3>
                <h3>Rp. <?=$hargaJadi= number_format($dt_produk['harga'],0,"","."); ?></h3>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</body>
</html>