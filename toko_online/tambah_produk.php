<!DOCTYPE html>
<html>
<head>
        <title>FA SHOP | Tambah</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <style type="text/css">
            *{
                font-family: 'Quicksand', sans-serif;
            }
            h2 {
                color: white;
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
            body{
                background-color: #24252A;
            }
            #bg-tambah{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            }
            .box-tambah{
            width: 500px;
            min-height: 250px;
            border: 2px solid white;
            padding: 25px;
            box-sizing: border-box;
            }
            .input-control {
            width: 450px;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            }
        </style>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div id="bg-tambah">
        <div class="box-tambah">
        <center>
            <h2>Tambah Produk</h2><br><br>
                <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="nama_produk" placeholder="Nama Produk" value="" class="input-control">
                        <br><br>
                        <textarea name="deskripsi" placeholder="Deskripsi" class="input-control" rows="4"></textarea>
                        <br><br>
                        <input type="number" name="harga" placeholder="Harga Produk" class="input-control">
                        <br><br>
                        <label for="foto" style="color: white;">Foto Produk : </label><br><br>
                        <input style="color: white;" type="file" name="foto" class="input-control">
                        <br><br>
                        <button><input type="submit" name="simpan" style="display: none;">Tambah Produk</button>
                </form>
        </center>
        </div>
    </div>
</body>
</html>