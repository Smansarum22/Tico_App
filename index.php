<?php
//koneksi ke database
mysqli_connect("localhost", "root", "", "tico_app");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="css/login.css"  >
    <title>Login</title>
  </head>

  <body class="body">
    <div class="pesawat">
      <img src="img/pesawatbulat.svg">
    </div>
    <div class="logoindosat">
      <img src="img/logoindosat.svg">
    </div>
    <div class="bulatputih">
      <h6> <strong> Ticket <br> Complaint </strong> </h6> <img src="img/merahputih.svg">
    </div>
    <div class="tandatanya">
      <img src="img/tandatanya.svg">
    </div>
    <div class="bintang">
      <img src="img/Bintang.svg">
    </div>

    <div class="login-page">
      <div class="form">
         <form >
           <input type="text" placeholder="User Name">
           <input type="password" id="password" placeholder="Password">
           <input type="submit" value="User" class="btn">
           <input type="submit" value="Ambass" class="btn">
         </form>

         <a href="homescreen.html" class="fpassword">Forgot Password ?</a>
        </div>
    </div>

    <div class="logo"> 
      <img src="img/logo.svg">
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 -->
 <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
 </script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>