

<?php
include "koneksi.php";
session_start();

if(!empty($_SESSION['username']) and !empty($_SESSION['password']) and $_SESSION['pesan']=="login")
{
  define("INDEX",true);
  $username=$_SESSION['username'];
 $password=$_SESSION['password'];

$query=mysqli_query($konek,"SELECT id_pemilik from pemilik where username='$username' and password='$password'");
while($data=mysqli_fetch_assoc($query))
{
  $id_pemilik=$data['id_pemilik'];
}
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
  <br><br>
  <div class="jumbotron">
    <div class="container">
        <h1><center>DAFTAR KOST</center></h1><br>
      </div>
  </div>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Kost</th>
      <th scope="col">Jenis Kost</th>
      <th scope="col">jumlah Kost</th>
      <th scope="col">Status</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga Kost</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Kota</th>
      <th scope="col">Kampus</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query=mysqli_query($konek,"Select p.*,k.* from kost k ,pemilik p where p.id_pemilik=k.id_pemilik and p.id_pemilik='$id_pemilik'");
    while($data=mysqli_fetch_assoc($query))
    {?>

    <tr>
      <?php $data['id_kost'];?>
      <td><?= $data['nama_kost'];?></td>
      <td><?php echo $data['jenis_kost'];?></td>
      <td><?php echo $data['jumlah_kost'];?></td>
      <td><?php echo $data['status'];?></td>
      <td><?php echo $data['deskripsi'];?></td>
      <td><?php echo $data['harga_kost'];?></td>
      <td><?php echo $data['lokasi'];?></td>
      <td><?php echo $data['kota'];?></td>
      <td><?php echo $data['kampus'];?></td>
      <td colspan="4">
        <a href="tampil_pemilik.php?id=<?php echo $data['id_kost'];?>"><button class="btn btn-success">TAMPIL</button></a>
        <a href="tampil_edit.php?id=<?php echo $data['id_kost'];?>"><button class="btn btn-warning">EDIT</button></a>
        <a href="hapus_logic_pemilik.php?id=<?php echo $data['id_kost'];?>"><button class="btn btn-danger">Hapus</button></a>
      </td>
      
    </tr>
    <hr>

   <?php }

    ?>
    
  </tbody>
</table>
<center><a href="tampil_tambah.php?id_pemilik=<?php echo $id_pemilik ;?>"><button class="btn btn-primary">Tambah</button></a></center>
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
<?php }
  else if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
  }
  else
  {
    header('location:login.php?pesan=gagal');
  }


?>