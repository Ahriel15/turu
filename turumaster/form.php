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
    <form method="post" action="proses.php">
    <label for="name">Nama:</label><br>
    <input type="text" id="name" name="name" class="form-control"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" class="form-control"><br>
    <label for="phone">No. Telepon:</label><br>
    <input type="tel" id="phone" name="phone" class="form-control"><br>
    <label for="reason">Keluhan:</label><br>
    <textarea id="reason" name="reason" class="form-control"></textarea><br>
    <label for="day">Hari:</label><br>
    <select id="day" name="day" class="form-control">
      <option>Senin</option>
      <option>Selasa</option>
      <option>Rabu</option>
      <option>Kamis</option>
      <option>Jum'at</option>
      <option>Sabtu</option>
    </select><br><br>
    <label for="Jam">Jam:</label><br>
    <input type="Jam" name="Jam" class="form-control">
    <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
  </form>
</div>
</div>
  
</body>

</html>


