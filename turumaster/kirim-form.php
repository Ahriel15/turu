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
  <?php
  $conn = mysqli_connect("localhost", "root", "", "db_form");
  $name = $_POST["name"];
  $email = $_POST["email"];
  $telpon = $_POST["phone"];
  $reason = $_POST["reason"];
  $doctor = $_POST["doctor"];
  $day = $_POST["day"];
  $Jam = $_POST["Jam"];
  $status = $_POST["status"];
  $id = $_POST["id"];
  


  $query = "INSERT INTO db_form  VALUES ('$name', '$email', '$telpon', '$reason', '$doctor', '$day', '$Jam', '$status', '$id')";
  if (mysqli_query($conn,$query)){
    echo"<script language=\"javascript\">
    alert (\"Pesan anda berhasil dikirimkan\")
    document.location=\"index.php\";
    </script>"; 
}else{
    echo"<script language=\"javascript\">
    alert (\"Pesan anda gagal dikirimkan\")
    document.location=\"index.php\";
    </script>";
}
mysqli_close($conn);
 


?>
