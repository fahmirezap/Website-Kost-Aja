<?php
include "koneksi.php";
?>
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
    /*Membuat tampilan layout data kost*/
    .layout_kost{
      width: 500px;
      height: 600px;
      margin-left: 550px;
      margin-right: 200px;
      background:   #7CFC00;
      border-radius: 20px;
    }
    /*ukuran size image*/
    .sizeimage{
      width: 350px;
      height: 250px;
      margin-left: 80px;
      padding-left: 10px;
      padding-top: 20px;
      padding-right: 10px;
      margin-bottom: 10px;
      border-radius: 10px;
    }
    .positiontext{
      text-align:;
      font-family: "Andale Mono", "Monotype.com", monospace;
      background: #F5FFFA;
      
      margin-left:55px;

      width: 400px;
      height:250px;
      border-radius: 20px;
    }

    </style>
  </head>

  <body>

    <nav id="menu">
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
  <br><br>
  <div class="jumbotron">
    <div class="container">
        <h1><center>DATA KOST</center></h1><br>
      </div>
  </div>
    
<!-- Membuat layout tampilan -->
  <div class="layout_kost">
    <?php
    $id=$_GET['id'];
   
    ?>

     <?php
    $query=mysqli_query($konek,"Select p.*,k.* from kost k ,pemilik p where p.id_pemilik=k.id_pemilik and k.id_kost='$id'");
    while($data=mysqli_fetch_assoc($query))
    {?>

      <center><h3><?php echo $data['nama_kost']."<br>";?></h3></center>
      <img class ="sizeimage" src="images/<?php echo $data['foto'];?>"><br>
  <div class="positiontext">
      
    


      <?php echo $data['jenis_kost'];?>
     <?php echo $data['jumlah_kost'];?>
     <?php echo $data['status'];?>
     <?php echo $data['deskripsi']?>
     <?php echo $data['harga_kost'];?>
     <?php echo $data['lokasi'];?>
     <?php echo $data['kota'];?>
     <?php echo $data['kampus'];?> 
    
    <?php  }
    ?>
    </div>
  </div>
</div>
      <hr>

      <footer>
        <p align="center"><a href="#"><b>KostAja.com</b></p></a>

        <b><p align="center">Copyright @fahmirezap @adrianfathurs</p><b>
      </footer>

    </div> <!-- /container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
