
  <?php
include "koneksi.php";


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="icon" type="image/png" href="images/rumah.png">
    <title>KostAja.com</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
    	
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
    .container
    {
      margin-top: 20px;
    }
    </style>
  </head>
  <body>
     <nav>
     <ul>
        <div id="heading">
            <a href="#">KostAja.com</a></li>
        </div>
        <li><a href="halaman_utama_pemilik.php">Beranda Pemilik</a></li>
        <li><a href="info.php">Info</a></li>
        <li><a href="bantuan.php">Bantuan</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    </nav>


  <div class="container">
  
  <form action="tambah_logic.php" method="POST">
  	
  	<div class="form-group">
      <label >NAMA KOST</label>
        <input type="text" class="form-control" name="nama_kost" required="true">
      </div>
      <div class="form-group">
        <label >JENIS KOST</label>
        <input type="text" class="form-control" name="jenis_kost" required="true">
      </div>
      <div class="form-group">
        <label >JUMLAH KOST</label>
        <input type="text" class="form-control" name="jumlah_kost" required="true">
      </div>
      <div class="form-group">
        <label >STATUS</label>
        <input type="text" class="form-control" name="status" required="true">
      </div>
      <div class="form-group">
        <label >DESKRIPSI</label>
        <input type="text" class="form-control" name="deskripsi"required="true">
      </div>
      <div class="form-group">
        <label >HARGA KOST</label>
        <input type="text" class="form-control" name="harga_kost"required="true">
      </div>
      <div class="form-group">
        <label >LOKASI</label>
        <input type="text" class="form-control" name="lokasi"required="true">
      </div>
      <div class="form-group">
        <label >KOTA</label>
        <input type="text" class="form-control" name="kota" required="true">
      </div>
      <div class="form-group">
        <label >KAMPUS</label>
        <input type="text" class="form-control" name="kampus"required="true">
      </div>
      <div class="form-group">
        <label >FOTO</label>
        <input type="text" class="form-control" name="foto" required="true">
      </div>
  <?php $idpemilik=$_GET['id_pemilik'];?>
  <button type="submit" class="btn btn-primary" >TAMBAH</button>
  <input type="hidden" name="id_pemilik" value="<?php echo $idpemilik?>">
</form>
</div>
      <hr>

      <footer>
        <p align="center"><a href="#"><b>KostAja.com</b></p></a>

        <b><p align="center">Copyright @fahmirezap @adrianfathurs</p><b>
      </footer>

   



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>