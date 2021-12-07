<?php  
	session_start();
	$id_produk = $_GET['id_produk'];

	if (isset($_SESSION['keranjang'][$id_produk])) {
		$_SESSION['keranjang'][$id_produk] += 1;
	} else {
		$_SESSION['keranjang'][$id_produk] = 1;
	}

	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";

	echo "<script>alert('Produk telah masuk ke keranjang belanja');location.href='myOrder.php';</script>";
?>