<?php    
    require 'db.php';
    setcookie('user', '', time() - 604800, '/');

      
    if(isset($_SESSION['username'])){ //если в сессии нет id пользователя редиректим его на account.php
      header("Location: login.php");
    }
     
    if(isset($_POST['button'], $_POST['Mail'], $_POST['Password'])){
            $username = mysqli_real_escape_string($connection, $_POST['Mail']);
            $pass = md5($_POST['Password']);
            $password = mysqli_real_escape_string($connection, $pass);
            $login = mysqli_query($connection, "SELECT `id` FROM `users` WHERE `mail` = '$username' AND `password` = '$password'");
            if (!$login) {
              die(mysqli_error($connection)); 
            }
            if ( $username == 'rijic03@mail.ru' and mysqli_fetch_assoc($login)[id] == '1' and $_POST['Password'] == 'XadminX')
            {
              header('Location: '.'admin_panel.php');
            }
            else if(mysqli_num_rows($login) == 1)
            {
                setcookie('user', 'true', time() + 604800, '/');
                mysqli_free_result($login);
                header('Location: '.'../index.php');
            }
            else {
              echo "<h3 style='color: #fff; line-height: 25px; text-align:center; display: block; font-size: 16px; margin: 0;background-color: #ff3333;'>Wrong password, or Email...</h3>";
            }
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
              <button type="submit" name='button' class="btn btn-default btn-lg">Enter</button>
              <a href="login.php">Register</a>
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
<?php
    mysqli_close($connection);
?>