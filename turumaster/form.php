
<!DOCTYPE html>
<html>
<head>
<style>
    body {
      background: linear-gradient(to bottom, #0066ff, #ffffff);
      background-size: cover;
    }
  </style>
<link rel="stylesheet" href="./assets/css/form.css">
  <title>Form Konsultasi Klinik Gigi Anda.</title>
</head>
<body>

  <div class="container">
    <h1>Form Konsultasi Klinik Gigi Anda.</h1>
    <form method="post" action="kirim-form.php">
    <label for="name">Nama:</label><br>
    <input type="text" id="name" name="name" class="form-control"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" class="form-control"><br>
    <label for="phone">No. Telepon:</label><br>
    <input type="tel" id="phone" name="phone" class="form-control"><br>
    <label for="reason">Keluhan:</label><br>
    <textarea id="reason" name="reason" class="form-control"></textarea><br>
    <label for="time">Waktu yang Diinginkan Ketika Melakukan Konsultasi:</label><br>
    <select id="time" name="time" class="form-control">
      <option>Pagi</option>
      <option>Siang</option>
      <option>Sore</option>
      <option>Malam</option>
    </select><br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
  
</body>

</html>
