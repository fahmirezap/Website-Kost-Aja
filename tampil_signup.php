
<?php include "koneksi.php"?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="images/rumah.png">
    <title>KostAja.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
/*Buat memberikan warna pada kotak form*/
    .colorform{
      background:#90EE90;

    }
/*Membuat ukuran form*/
    .sizeform{
      border-radius: 10px;
      width: 430px;
      height: 400px;
    }
    .mgform{
      margin-left: 550px;

    }

    </style>
  </head>

  <body>

    <nav>
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
  <div class="jumbotron">
    <div class="container">
        <h1>Mau Cari Kost atau iklan kost?</h1><br>
        <h2>KostAja.com Solusinya</h2>
      </div>
  </div>
<div class="colorform mgform sizeform">
  <div class="container">
   <center><h2><strong>Sign Up</strong></h2></center>
   <hr>
  <!-- Form untuk input data sign up -->  
  <form method="POST" action ="signup_logic.php">
    <?php
    $query=mysqli_query($konek,"Select * from pemilik");
    while($data=mysqli_fetch_assoc($query))
    {
      $id_pemilik=$data['id_pemilik']+1;
    }
    ?>
  <div class="form-group">
    <label for="username"><strong>Username</strong></label>
    <input type="text" class="form-control" name="username" placeholder="Enter Username" required="true">
    
  </div>
  <div class="form-group">
    <label for="password"><strong>Password</strong></label>
    <input type="password" class="form-control" placeholder="Password" name="password" required="true">
  </div>
  <div class="form-group">
    <label for="contactperson"><strong>Contact Person</strong></label>
    <input type="text" class="form-control" placeholder="contactperson" name="contactperson" required="true">
  </div>
  
  <div class="form-group">
    <label for="namapemilik"><strong>Nama Pemilik</strong></label>
    <input type="text" class="form-control" placeholder="namapemilik" name="namapemilik" required="true">
  

</div>
  <center><button type="submit" name="submit" class="btn btn-success">Submit</button>
    <input type="hidden" name="id" value="<?php echo $id_pemilik ;?>">
  </center>
  <br>
      <label>Sudah Punya Akun?</label>
      <a href="login.php"><b>Login</b></a>
</form>
    
  </div>

      <!-- Example row of columns -->
      <hr>
      <footer>
        <p align="center"><a href="tampil_pengunjung.php"><b>KostAja.com</b></p></a>

        <b><p align="center">Copyright @fahmirezap @adrianfathurs</p><b>
      </footer>

    </div> <!-- /container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
