<?php

class server
{

    function __construct()
    {
        //koneksi menghubungkan ke database
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "db_tico";
        $this->connect = new mysqli($server,$username,$password,$database);
    }

    function signin($nik, $password){

        $passMd5 = md5($password);
        
        //user
        $query = "SELECT * FROM tb_user WHERE nik = '$nik' AND pass = '$passMd5'";
        $user = mysqli_query($this->connect,$query) or die(mysqli_error($this->connect));

        if($user === true){

            return "user";

        }else{

            $queryambas = "SELECT * FROM tb_ambas WHERE nik = '$nik' AND pass = '$passMd5'";
            $ambas = mysqli_query($this->connect,$queryambas) or die(mysqli_error($this->connect));

            if($ambas === true){

                return "ambas";

            }else{
                
                return false

            }
        }
        
    }





}



?>