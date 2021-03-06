<?php

  require 'server.php';
  $db = new server;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="css/complaintpage.css"  >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@700&display=swap" rel="stylesheet">
    
    <title>Complaint Page</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-fixed">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="img/Group 11.svg" alt="">
          </a>
        </div>
    </nav> 
  <!--
<img src="img/bmerah.svg" class="bmerah"> 
   <img src="img/Group 21.svg" class="group21">
   <img src="img/kplmerah.svg" class="kplmerah">
  --> 
    <nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <p class="display-4">Complaint, SP Problem</p>
              <h6 class="lead">Anda mengajukan complaint SP Problem. silahkan isi keluhan anda dibawah ini</h6>
            </div>
          </div>
    </nav>
 
      <!--
<img src="img/bulatstengah.svg" class="bulatstengah">
      <img src="img/bulatpth.svg" class="bulatpth">
      <img src="img/_ (2).svg" class="_">
      -->
        <div class="input-group mb-3">
        <div class="form">
          <form method="post">
            <a>
              <span class="input-group-text">
                <img src="img/formID.svg"> 
                  <input type="text" class="form-control" name="id_outlet" placeholder="ID Outlet" img src="" aria-label="Username" aria-describedby="basic-addon1">
              </span>
          </a> <br>
          <a>
            <span class="input-group-text">
              <img src="img/formCalender.svg">
              <input type="date" class="form-control"  name="tanggal_transaksi" placeholder="Tanggal Transaksi" aria-label="Username" aria-describedby="basic-addon1">
            </span>
          </a> <br>
          <a>
            <span class="input-group-text">
              <img src="img/formNomorMobo.svg">
              <input type="tel" class="form-control" name="no_mobo" placeholder="Nomor Mobo Transaksi" aria-label="Username" aria-describedby="basic-addon1">
            </span>
          </a> <br>
          <a>
          <a>
            <span class="input-group-text">
              <img src="img/formNomorMobo.svg">
              <input type="tel" class="form-control" name="no_pelanggan" placeholder="Nomor Pelanggan" aria-label="Username" aria-describedby="basic-addon1">
            </span>
          </a> <br>
          <a>
            <span class="input-group-text">
              <img src="img/FormPicture.svg">
              <input type="file" class="form-control" name="gambar" placeholder="Upload Gambar" aria-label="Username" aria-describedby="basic-addon1">
            </span>
          </a>  <br>   
          <a>
            <span class="input-group-text">
              <img src="img/FormPicture.svg">
              <input type="file" class="form-control" name="file_data" placeholder="Upload File Tambahan" aria-label="Username" aria-describedby="basic-addon1">
            </span>
          </a>  <br>           
          <a>
            <span class="input-group-text">
              <img src="img/FormDeskripsi.svg">
              <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Masalah" aria-label="Username" aria-describedby="basic-addon1">
            </span>
          </a> <br>
          <a>
            <input type="submit" name="send" value="KIRIM" class="btn btn-outline-danger">
          </a>
        </form>
        </div>
        </div>
    <nav class="bottom">
    <div>
        <footer class="footer">
          <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <a class="navbar-brand" href="homescreen.php">
                    <img src="img/home 1.svg" alt="">
                </a>
                <a class="navbar-brand" href="#">
                  <img src="img/Group.svg" alt="">
                </a>
                <a class="navbar-brand" href="notifikasi.php">
                  <img src="img/text 2.svg" alt="">
                </a>
                <a class="navbar-brand" href="datauser.php">
                  <img src="img/personal-data 2.svg" alt="">
                </a>
                <div class="dropup">
                  <button class="dropbtn"><img src="img/user 4.svg" alt=""></button>
                  <div class="dropup-content">
                    <a href="registerambas.php">Register</a>
                    <a href="editprofil.php">Edit Profil</a>
                    <a href="#">Logout</a>
                  </div>
                </div>
              </div>
          </nav>
      </footer>
      </div>
    </nav>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>

  <?php

     if(isset($_POST['user'])){

        $id_user = $_SESSION["nik"];
        $jenis_complaint = $_GET['jenis_complaint'];
        $id_outlet = $_POST['id_outlet'];
        $tanggal_transaksi = $_POST['tanggal_transaksi'];
        $no_mobo = $_POST['no_mobo'];
        $no_pelanggan = $_POST['no_pelanggan'];
        // $gambar = $_POST['gambar'];
        $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
        $file_data = $_POST['file_data'];
        $deskripsi = $_POST['deskripsi'];

        $hasil = $db->sendComplaint($id_user, $jenis_complaint,$id_outlet, $tanggal_transaksi,$no_mobo, $no_pelanggan, $gambar, $file_data, $deskripsi);

              if($hasil != false){
                echo 'Input komplain telah berhasil';
              }else{    
                echo 'Input komplain belum berhasil';
              }
     }  
  
  ?>

</html>