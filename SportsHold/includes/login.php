<?php
  require 'db.php';
  

  if ($_POST['Password'] != $_POST['RePassword']) {
        echo "<h3 style='color: #fff; line-height: 25px; text-align:center; display: block; font-size: 16px; margin: 0;background-color: #ff3333;'>Re-entered password incorrectly...</h3>";
  }else {
    if( isset($_POST['button']) )
    {
      $Mail = $_POST['Mail'];
      $password = md5($POST['Password']);
      
      



      $res = mysqli_query($connection, "SELECT * FROM `users` WHERE `mail` = '$Mail'");
      if (!$res) {
        die(mysqli_error($connection)); 
      }
      
      if(mysqli_num_rows($res) == 0) {

          //добавляем в бд
          $users = mysqli_query($connection, "INSERT INTO `users` (`id`, `mail`, `password`) VALUES (NULL, '$Mail', '$password')");
          if($users) 
          { 
            setcookie('user', 'true', time() + 604800, '/');
            header('Location: '.'../index.php');
          }
          else  { 
            echo "<h3 style='color: #fff; line-height: 25px; text-align:center; display: block; font-size: 16px; margin: 0;background-color: #ff3333;'>Cannot add to database. Try again...</h3>"; 

          }

      }
      else { echo "<h3 style='color: #fff; line-height: 25px; text-align:center; display: block; font-size: 16px; margin: 0;background-color: #ff3333;'>A user with this email already exists...</h3>"; }
    }
    $connection->close();
  }
  
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../media/css/my/login.css">
  <!-- Font Awesome -->
  <link rel="shortcut icon" href="../media/img/header/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>SportsHold</title>
</head>

<body>
  <div class="section">
    <div class="container">
      <div class="register__form">
        <div class="img text-center">
          <img src="../media/img/header/main-logo.png" alt="">
        </div>
        <div class="register">
          <img src="../media/img/header/favicon.jpg" alt="">
          <form method='POST' action="#">
            <div class="register__Inputts">
              <input type="email" name='Mail' class='mail' required placeholder='Enter your Mail'
                value="<?php echo $_POST['Mail']?>">
              <input type="password" name='Password' required class='password' placeholder='Enter your Password'
                value="<?php echo $_POST['Password']?>">
              <input type="password" name='RePassword' required class='repass' placeholder='Repeat your Password'
                value="<?php echo $_POST['RePassword']?>">
              <button type="submit" name='button' class="btn btn-default btn-lg">Register</button>
              <a href="enter.php">Enter</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>