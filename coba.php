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
    #menu {
        background:#008000;
        width: 100%;
        height: 65px;
        margin: 0px;
        padding: 0px;
        
    }
    #menu ul {
        list-style: none;

    }
    #menu ul li {
        float: left;
        line-height: 65px
    }
    #menu ul li a {
        float:left; 
        width:100px; 
        display:block; 
        text-align:center; 
        color:#FFF; 
        text-decoration:none; 
    }
    #menu ul ul {
        display:none; 
        list-style:none; 
        position:absolute; 
        background-color:#00FF00;
        float: none;
        top:65px; 
        width:190px;
    }
    #menu ul li a:hover {
        background-color:#000000; 
        display:block;
    }
    #menu ul li:hover ul {
        display:block;
    }
    #menu ul ul li a {
        display:block;
        padding-left:30px; 
        text-align:left; 
        width:160px;
        height: 60px;
        line-height: 60px;
    }
    #menu ul ul li a:hover {
        color:#fff;
    }
    .jumbotron {

          position: relative;
          background: url(images/bantu.jpg) center center;
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
    .margin{
      padding: 20px;
      margin-left: 160px;
      background:   #FFF5EE;
      width: 500px;
      height: 900px;
      border-radius:20px; 
    }

    </style>
  </head>

  <body>

    <nav id="menu">
     <ul>
        <div id="heading">
            <a href="halaman_utama.php">KostAja.com</a></li>
        </div>
        <li><a href="halaman_utama.php">Beranda</a></li>
        <li><a href="info.php">Info</a></li>
        <li><a href="bantuan.php">Bantuan</a></li>
    </ul>
    </nav>
  <br><br>
  <div class="jumbotron"></div>
    
<<!-- Membuar Header Body -->
<center><h1>EDIT</h1></center>
<!-- Membuat layout tampilan -->
  <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="layout_kost">
      <?php $id=$_GET['id']; ?>
      <?php
      $query=mysqli_query($konek,"Select p.*,k.* from kost k ,pemilik p where p.id_pemilik=k.id_pemilik and k.id_kost='$id'");
      while($data=mysqli_fetch_assoc($query))
      {?>
      <center><h3><?php echo $data['nama_kost']."<br>";?></h3></center>
      <img class ="sizeimage" src="images/<?php echo $data['foto'];?>"><br>
        <div class="positiontext">
          <?php $idpemilik=$data['id_pemilik'];?>
           <?php echo $data['jenis_kost'];?>
           <?php echo $data['jumlah_kost'];?>
           <?php echo $data['status'];?>
           <?php echo $data['deskripsi']?>
           <?php echo $data['harga_kost'];?>
           <?php echo $data['lokasi'];?>
           <?php echo $data['kota'];?>
           <?php echo $data['kampus'];?> 
      <?php }?>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
    <div class="margin">
    <form method="POST" ACTION="edit_logic.php">
     <?php 
     $id;
      $idpemilik;

     ?>
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
    
      <center><button type="submit" class="btn btn-primary">EDIT</button></center>
      <input type="hidden" name="id_kost" value="<?php echo $id;?>">
      <input type="hidden" name="id_pemilik" value="<?php echo $idpemilik?>">
    </form>
    </div>
  </div>

</div>

        <h1><center>Pusat Bantuan<center></h1><br>
</div>
      <hr>

      <footer>
        <p align="center"><a href="halaman_utama.php"><b>KostAja.com</b></p></a>

        <b><p align="center">Copyright @fahmirezap @adrianfathurs</p><b>
      </footer>

    </div> <!-- /container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
