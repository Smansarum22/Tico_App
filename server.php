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

    function signin($username,$password){
        
    }



}



?>