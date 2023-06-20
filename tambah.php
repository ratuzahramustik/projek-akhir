<?php

require 'controller.php';
$connect = mysqli_connect("localhost", "root", "", "ratubase");

if (isset($_POST["submit"])) {


    if (tambah($_POST) > 0) {
        echo "<script> alert('data berhasil dimasukan')
                       document.location.href = 'index.php'
                       </script>";
    } else {
        echo "<script>
        alert('data tidak berhasil dimasukan')
        document.location.href = 'index.php'
        </script>";
    };
};
?>