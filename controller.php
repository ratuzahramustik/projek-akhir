<?php
  $conn = mysqli_connect("sql105.infinityfree.com", "if0_34463436", "D9yZmDbRRhqnMX2", "if0_34463436_ratubase");

  function query ( $query ){
    global $conn;
    $result = mysqli_query($conn, $query);
    $wadah = [];
    while ($baju = mysqli_fetch_assoc($result) ) {
      $wadah[] = $baju;
    }
    return $wadah;
  }

  function tambah( $data ){
    global $conn;
    //htmlspecialchars untuk blog tag elemen html
    //simpan data ke dalam variable superglobal $_post
    $name=($data["name"]);
    $email=($data["email"]);
    $phone=($data["phone"]);
    $date=($data["date"]);
    $message=($data["message"]);


    //data yang disimpam di $_POST masukan ke databse
    $query ="INSERT INTO contac
         VALUES('', '$name', '$email', '$phone','$date','$message')";
        
        mysqli_query($conn, $query);

    //yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
    return mysqli_affected_rows($conn);
}
