<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		body{
			background-color: #24252A;		
		}
		*{
			color: white;
		}
		img{
			width: 300px;
			height: auto;
		}
		.deskripsi-produk{
			display: inline-block;
		}
	</style>
</head>
<body>
<?php
include "header.php";
include "koneksi.php";
$qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
$dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<br><h2 align="center">Quick View</h2><br><hr><br><br>
<div>
	<div align="center" class="foto">
		<img src="foto_produk/<?=$dt_produk['foto']?>"><br><br><br><hr><br>
	</div>
	<div align="center">
		<form action="beli.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
			<div class="deskripsi-produk">
				<table cellspacing="15" cellpadding="5">
					<tr>
						<td><p>Produk</p></td>
						<td>: <?=$dt_produk['nama_produk']?></td>
					</tr>
					<tr>
						<td><p>Deskripsi</p></td>
						<td>: <?=$dt_produk['deskripsi']?></td>
					</tr>
					<tr>
						<td><p>Harga</p></td>
						<td>: Rp. <?=$hargaJadi= number_format($dt_produk['harga'],0,"","."); ?></td>
					</tr>
					<tr>
						<td colspan="3" align="center"><button>Add to cart</button></td>
					</tr>
				</table>
			</div>
		</form>
	</div>
</div>
</body>
</html>
