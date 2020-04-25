<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="icon" type="image/png" href="images/rumah.png">
    <title>KostAja.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
	    body {
        
        padding-bottom: 40px;
      }
    * {
    margin: 0px;
    padding: 0px;
    }
    body {
        font-size: 14px;
        font-family: verdana;
        background: #d6d6d6;
    }
    #heading{
        float: left;
        width: 640px;
    }
    #heading a {
        line-height: 65px;
        text-decoration: none;
        padding-left: 60px;
        color:#FFF;
        font-family: aardvark cafe;
        font-size: 40px;
    }
    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 

    nav ul {
        background:#008000;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
     }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:black;;
    }

    nav ul li:hover a{
        color:white;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }
    .jumbotron {

          position: relative;
          background: url(images/home.jpg) center center;
          color:#fff;
          width: 100%;
          height: 100%;
          background-size: cover;
          overflow: hidden;
    }
    .span4 {
    width: 370px;
    }
    .row-fluid .span4 {
    width: 31.623931623931625%;
    *width: 31.570740134569924%;
    }

.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
	font-weight: bold;
	color:black;
}

.kotak_login{
	width: 350px;
	background: #90EE90;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}

label{
	font-size: 12pt;
	font-weight: bold;
}

.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}

.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}
	</style>
</head>
<body>
	<nav id="menu">
     <ul>
        <div id="heading">
            <a href="index.html">KostAja.com</a></li>
        </div>
        <li><a href="halaman_utama_pemilik.php">Beranda Pemilik</a></li>
        <li><a href="info.php">Info</a></li>
        <li><a href="bantuan.php">Bantuan</a></li>
    </ul>
    </nav>
  <br><br>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
		else if($_GET['pesan'] == "belum_login"){
			echo "<div class='alert'>Anda harus login untuk melihat halaman utama</div>";
		}
        else if($_GET['pesan'] == "gagaldaftar"){
            echo "<div class='alert'>Gagal Mendaftarkan Akun</div>";
        }
	}
	?>
  <div class="jumbotron">
    <div class="container">
        <h1>Mau Cari Kost atau iklan kost?</h1><br>
        <h2>KostAja.com Solusinya</h2>
      </div>
  </div>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="proseslogin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required">
			<button type="submit" class="btn btn-success" align="center" float= "right">LOGIN</button>
			<br>
 			<label>Belum Punya Akun?</label>
      		<a href="tampil_signup.php"><b>Daftar</b></a>
			<br/>
			<br/>
		</form>
		
        <footer>
        <p align="center"><a href="index.html"><b>KostAja.com</b></p></a>

        <b><p align="center">Copyright @fahmirezap @adrianfathurs</p><b>
      </footer>

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>