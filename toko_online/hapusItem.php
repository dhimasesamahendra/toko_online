<?php
 session_start();
 unset($_SESSION['keranjang'][$_GET['id_produk']]);
 header('location: myOrder.php');
?>