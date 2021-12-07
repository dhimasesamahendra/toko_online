<?php 
    session_start(); 
    include "koneksi.php";
    $data = mysqli_query($conn,"select * from pelanggan");
    $row = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
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
        .data div{
            display: inline-flex;
        }
        .data div .box-data{
            width: "auto";
            height: 50px;
        }
    </style>
</head>
<body>
    <?php 
    include "header.php"; 
    ?>

    <section>
        <div>
            <br><br><h1 align="center">Checkout</h1><br><br><hr><br><br>
            <table border="1px" cellspacing="0" cellpadding="20" align="center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subharga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php  $totalBelanja = 0; ?>
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
                        <td>Rp. <?= number_format($subharga);?>

                    </tr>
                    <?php $nomor++; ?>
                    <?php  $totalBelanja += $subharga; ?>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4">Total Belanja</th>
                        <th>Rp. <?= number_format($totalBelanja); ?></th>
                    </tr>
                </tfoot>
            </table><br><br><br>
            <p align="center">
                *Mohon cek kembali data diri berikut agar terhindar dari kesalahan.
            </p>
            <form method="post">
            <table align="center">
                <thead>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Metode Pembayaran</th>
                </thead>
                <tbody>
                    <td><input type="text" readonly value="<?= $row['nama']; ?>"></td>
                    <td><input type="text" readonly value="<?= $row['telp']; ?>"></td>
                    <td><input type="text" readonly value="<?= $row['alamat']; ?>"></td>
                    <td>
                        <select class="box-data" name="metode_pembayaran">
                            <option disable selected hidden>Pilih proses pembayaran</option>
                            <option>BRI</option>
                            <option>BCA</option>
                            <option>Mandiri</option>
                            <option>Indomaret</option>
                            <option>Alfamart</option>
                             <option>Dana</option>
                            <option>OVO</option>
                            <option>Hutang</option>
                        </select>
                    </td>
                </tbody>
            </table><br><br>
                <div align="center">
                    <button name="checkout">Checkout</button>
                </div><br><br>
            </form>
            <?php  
                if (isset($_POST['checkout'])) {
                    $id_pelanggan = $row['id_pelanggan'];
                    $metode_pembayaran = $_POST['metode_pembayaran'];
                    $tgl_transaksi = date("Y-m-d");

                    mysqli_query($conn,"INSERT INTO `transaksi`(`id_transaksi`, `id_pelanggan`, `metode_pembayaran`, `tgl_transaksi`, `total_pembelian`) VALUES (NULL,'$id_pelanggan','$metode_pembayaran','$tgl_transaksi','$totalBelanja')");
                    $id_pembelian_baru = $conn->insert_id;
                    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
                        mysqli_query($conn, "INSERT INTO detail_transaksi VALUES (NULL, '$id_pembelian_baru', '$id_produk', '$jumlah')");
                    }

                    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
                        unset($_SESSION['keranjang'][$id_produk]);
                    }

                    echo "<script>alert('Terimakasih karena telah mempercayai kami. Pembelian anda sukses');location.href='myOrder.php';</script>";
                }
            ?>
        </div>
    </section>
<!--     <pre><?= print_r($row); ?></pre> -->
<!--         <pre><?= print_r($_SESSION['keranjang'])?></pre> -->
</body>
</html>