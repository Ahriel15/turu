<?php
session_start();
include 'loginkoneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>halaman login</title>
  <style>
    body {
      background-color: lightblue;
    }
    .container {
      width: 400px;
      margin: 0 auto;
    }
    h1 {
      text-align: center;
      color: white;
    }
    form {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid blue;
      border-radius: 4px;
    }
    input[type="submit"] {
      width: 100%;
      background-color: blue;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: darkblue;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>silahkan login</h1>
    <form action="" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password">

      <input type="submit" id="login" value="Login">
    </form>
    <?php
    if(isset($_POST['login']))
      $user =  $_POST['username'];
      $pass =  $_POST['password'];
      $data_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
      $r = mysqli_fetch_array($data_user);
      $username = $r['username'];
      $password = $r['password'];
      $level = $r['level'];
      if ($user == $username && $pass == $password) $_SESSION['level'] = $level;
      header('location:operator.php')
    
    ?>
  </div>
</body>
</html>
