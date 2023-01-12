<?php
  $to = "tatazurel@gmail.com";
  $subject = "Permintaan Konsultasi Klinik Gigi Anda.";
  $message = "Nama: " . $_POST["name"] . "\nEmail: " . $_POST["email"] . "\nNo. Telpon: " . $_POST["phone"] . "\nKeluhan: " . $_POST["reason"] . "\nDokter yang dipilih: " . $_POST["doctor"]. "\nHari: " . $_POST["day"]. "\nJam: " . $_POST["Jam"];
  $headers = "From: " . $_POST["email"];
  
  if(mail($to, $subject, $message, $headers)){
  echo "<script language=\"javascript\">
  alert (\"form anda telah dikirim :)\")
  document.location=\"index.php\";
  </script>";} 
  else {
    echo "<script language=\"javascript\">
    alert (\"form gagal terkirim :(\")
    document.location=\"index.php\";
    </script>";
  } 
?>
