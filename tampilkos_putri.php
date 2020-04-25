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
    <link rel="stylesheet" href="tampilkosputri.css">
    <style>
      form {
        margin-left: 150px;
      }
    </style>
  </head>

  <body>

    <nav>
     <ul>
        <div id="heading">
            <a href="index.html">KostAja.com</a></li>
        </div>
        <li><a href="halaman_utama.php">Beranda</a></li>
        <li><a href="info.php">Info</a></li>
        <li><a href="bantuan.php">Bantuan</a></li>
    </ul>
    </nav>
  <br><br>
  <div class="jumbotron">
    <div class="container">
        <h1>Kost Putri</h1><br>
        <p>Berisi Daftar Kost Perempuan</p>
      </div>
  </div>

  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Cari Berdasar Kota" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="cari">Search</button>
  </form>
  <br>
  <?php 
  include "koneksi.php";
  $query = "SELECT k.*,p.* FROM kost k, pemilik p WHERE k.id_pemilik = p.id_pemilik AND jenis_kost='putri'";
    $result = mysqli_query($konek,$query);
  ?>

    <div class="container">
         <div class="row">
                   <div class="col-sm-4 col-lg-4 col-md-4">
                        
                         <?php
                               if(isset($_GET['cari']))
                              {
                                $cari = $_GET['cari'];
                                include 'koneksi.php';
                                $result=mysqli_query($konek, "SELECT k.*,p.* FROM kost k, pemilik p WHERE k.id_pemilik = p.id_pemilik AND jenis_kost='putri' AND kota LIKE '%".$cari."%'");
                              }
                              else
                              {
                                include 'koneksi.php';
                                $result=mysqli_query($konek, "SELECT k.*,p.* FROM kost k, pemilik p WHERE k.id_pemilik = p.id_pemilik AND jenis_kost='putri'");
                              }
                              while($data = mysqli_fetch_array($result)){
                              ?>
                              
                                  
                                <div class="media">
                                  <div class="thumbnail threed">
                                  
                                  <img src=images/<?=$data["foto"]?> style="margin:0 40px 40px 0;">
                                  </div>
                                  <div class="media-body" style="text-align:left; width:100%;">
                                    <br>
                                      <h4><b><?=$data["nama_kost"]?></b></h4>
                                      
                                      <b><p>Alamat:</p></b> <?=$data["lokasi"]?><br>
                                      <b><p>Kota:</p></b> <?=$data["kota"]?><br>
                                     <b><p>Dekat Kampus:</p></b> <?=$data["kampus"]?><br>
                                     <b><p>Deskripsi:</p></b> <?=$data["deskripsi"]?><br>
                                     <b><p>Harga:</p></b> <?=$data["harga_kost"]?><br>
                                     <b><p>Hubungi:</p></b> <?=$data["contact"]?><br>
                                     <b><p>Avaliable:</p></b> <?=$data["jumlah_kost"]?><br>

                                      <br>
                                  </div>
                                </div>

                              <?php
                              }
                            ?>

                   </div>
       </div>
   </div>

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
