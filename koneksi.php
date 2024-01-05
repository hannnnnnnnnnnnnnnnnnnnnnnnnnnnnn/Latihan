<?php
    
    $koneksi = mysqli_connect("localhost","root","","latihan");

        if(mysqli_connect_errno()){
            echo "koneksi gagal";
        }else{
            echo "koneksi berhasil";
        }

?>