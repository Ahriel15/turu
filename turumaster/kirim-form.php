<?php
  $to = "AsriellDre1@outlook.com";
  $subject = "Permintaan Konsultasi Klinik Gigi Anda.";
  $message = "Nama: " . $_POST["name"] . "\nEmail: " . $_POST["email"] . "\nKeluhan: " . $_POST["reason"] . "\nWaktu Konsultasi:" . $_POST["time"];
  $headers = "From: " . $_POST["email"];
  
  if(mail($to, $subject, $message, $headers)){
  echo "Form terkirim ke email server";} else {
    echo "email gagal terkirim";
  }
?>
