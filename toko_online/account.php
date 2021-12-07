<?php
ob_start();
session_start();
if(!isset($_SESSION['id_pelanggan'])){
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='./'>Back</button>");
}
    include "koneksi.php";
?>
<html>
<head>
    <title>FA SHOP | Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <style type="text/css">
        *{
            font-family: 'Quicksand', sans-serif;   
        }
        body{
            background-color: #24252A;
        }
        .bio{
            color: white;
        }
        #bg-tb{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .bio{
            width: 500px;
            min-height: 250px;
            border: 2px solid white;
            padding: 25px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <?php
        include "header.php"
    ?>
    <?php
        $tampilPelanggan    =mysqli_query($conn, "SELECT * FROM pelanggan WHERE id_pelanggan='$_SESSION[id_pelanggan]'");
        $pelanggan    =mysqli_fetch_array($tampilPelanggan);
    ?>
    <div id="bg-tb">
    <table border="0" cellpadding="4" class="bio">
        <tr>
            <td width="390" colspan="2" style="color:white;"><b>Your Account</b></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?=$pelanggan['nama']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?=$pelanggan['alamat']?></td>
        </tr>
        <tr>
            <td>No. Telp</td>
            <td>: <?=$pelanggan['telp']?></td>
        </tr>
    </table>
    </div>
</body>
</html>