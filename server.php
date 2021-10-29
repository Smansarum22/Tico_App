<?php


class server
{

    function __construct()
    {
        //koneksi menghubungkan ke database
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "tico";
        $this->connect = new mysqli($server,$username,$password,$database);
    }

    function signin($nik, $password){

        $passMd5 = md5($password);
        
        //user
        $query = "SELECT * FROM tb_user WHERE nik = '$nik' AND pass = '$passMd5'";
        $user = mysqli_query($this->connect,$query) or die(mysqli_error($this->connect));

        if($user == true){

            while($row = $user->fetch_assoc()) {
              
               $_SESSION["nik"] =  $row["nik"];
               $_SESSION["nama"] =  $row["nama"];
               $_SESSION["mc"] =  $row["mc"];
               $_SESSION["posisi"] =  $row["posisi"];
            }

            return "user";

        }else{

            $queryambas = "SELECT * FROM tb_ambas WHERE nik = '$nik' AND pass = '$passMd5'";
            $ambas = mysqli_query($this->connect,$queryambas) or die(mysqli_error($this->connect));

            if($ambas == true){

                return "ambas";

            }else{
                
                return false;
            }
        }
        
    }

    function sendComplaint($id_user, $jenis_complaint,$id_outlet, $tanggal_transaksi,$no_mobo, $no_pelanggan, $gambar, $file_data, $deskripsi){

        $query = "INSERT INTO tbkomplain (
            no_complaint, id_user, jenis_komplain, desc_komplain, gambar_komplain,
            dok_komplain, nohp_komplain, tgl_komplain, id_outlet, no_mobo, tgl_transaksi
            ) VALUES (
            '', '$id_user', '$jenis_complaint', '$deskripsi', '$gambar',
            '$file_data', '$no_pelanggan', '', '$id_outlet', '$no_mobo', '$tanggal_transaksi'
        )";
        $result = mysqli_query($this->connect,$query) or die(mysqli_error($this->connect));

        if($result == true){
            return true;
        } else {
            return false;
        }
    }





}



?>