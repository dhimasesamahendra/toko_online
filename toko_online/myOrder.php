<?php  
    session_start();

    // echo "<pre>";
    // print_r($_SESSION['keranjang']);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FA SHOP | My Order</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <style type="text/css">
        *{
            font-family: 'Quicksand', sans-serif;   
        }
        body{
            background-color: #24252A;
            color: white;
        }
    </style>
</head>
<body>
    <?php  
        include "koneksi.php";
        include "header.php";
    ?>

    <section>
        <div>
            <br><br><h1 align="center">My Order</h1><br><br><hr><br><br>
            <table border="1px" cellspacing="0" cellpadding="20" align="center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subharga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
                    <?php  
                        $ambil = $conn->query("select * from produk where id_produk = '$id_produk'");
                        $pecah = $ambil->fetch_assoc();
                        $subharga = $pecah["harga"] * $jumlah;
                        // echo "<pre>";
                        // print_r($pecah);
                        // echo "</pre>";
                    ?>
                    <tr>
                        <td><?= $nomor; ?></td>
                        <td><?= $pecah['nama_produk'];?></td>
                        <td>Rp. <?= number_format($pecah['harga']);?></td>
                        <td><?= $jumlah; ?></td>
                        <td>Rp. <?= number_format($subharga);?></td>
                        <td><a href="hapusItem.php?id_produk=<?=$id_produk?>"><img src="assets/remove.png" width="35px" height="auto"></a></td>

                    </tr>
                    <?php $nomor++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <br><br>
            <div align="center">
            <a href="home.php"><button>Lanjutkan Belanja</button></a>
            <a href="checkout.php"><button>Checkout</button></a>
            </div>
        </div>
    </section>
</body>
</html>