<?php
  $conn = mysqli_connect("localhost", "root", "", "db_form");
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $reason = $_POST["reason"];
  $doctor = $_POST["doctor"];
  $day = $_POST["day"];
  $Jam = $_POST["Jam"];
  $kirim = $_POST["kirim"];
  



  // Insert form data into the database
  $query = "INSERT INTO db_form  VALUES ('$name', '$email', '$phone', '$reason', '$doctor', '$day', '$Jam', '$kirim' )";
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