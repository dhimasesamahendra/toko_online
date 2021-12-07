<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Breng Shop | Contact</title>
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
        .biodata{
        	color: white;
        }
        #bg-contact{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .biodata{
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
	include "header.php"; 
	?>
	<div id="bg-contact">
		<div class="biodata">
            <p style="font-size: 20px;">
                Nama    : Dhimas Esa Mahendra <br><br>
                Absen   : 16 <br><br>
                Kelas   : XI RPL 6 <br><br>
            </p>
			<br><div class="links">
				<a href="https://www.instagram.com/farandioalkhld/"><button>Intagram</button></a>
                <a href="https://wa.me/qr/OBUQIMIVE7MXC1"><button>Whatsapp</button></a>
			</div>
		</div>
	</div>
</body>
</html>