<!-- <?php
  
  if (isset($_POST['button'])) {

  
  if ($_POST['Password'] != $_POST['RePassword']) {
        echo "<h3 style='color: #fff; line-height: 25px; text-align:center; display: block; font-size: 16px; margin: 0;background-color: #ff3333;'>Re-entered password incorrectly...</h3>";
  }
  $Mail = $_POST['Mail'];
  $pass = md5($_POST['Password']);

  $db = Db::getConnection();
  $res = $db->query("SELECT * FROM `users` WHERE `mail` = '$Mail'");
  $row = $res->fetch();
  if(empty($row)) {

      //добавляем в бд
      $users = $db->query("INSERT INTO `users` (`id`, `mail`, `password`) VALUES (NULL, '$Mail', '$pass')");
      setcookie('email', $Mail ,time() + 3600, '/');
  }
  else { echo "<h3 style='color: #fff; line-height: 25px; text-align:center; display: block; font-size: 16px; margin: 0;background-color: #ff3333;'>A user with this email already exists...</h3>"; }
}
  
?> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/template/css/my/login.css">
  <!-- Font Awesome -->
  <link rel="shortcut icon" href="/template/img/header/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>SportsHold</title>
</head>

<body>
  <?php if ( isset($errors) && is_array($errors) ){
    foreach ($errors as $error) {
      echo "<h3 style='color: #fff; line-height: 25px; text-align:center; display: block; font-size: 16px; margin: 0;background-color: #ff3333;'>" . $error . "</h3>";
    }
    }?>
    <div class="section">
      <div class="container">
        <div class="register__form">
          <div class="img text-center">
            <img src="/template/img/header/main-logo.png" alt="">
          </div>
          <div class="register">
            <img src="/template/img/header/favicon.jpg" alt="">
            <form method='POST' action="#">
              <div class="register__Inputts">
                <input type="text" name='Name' required placeholder='Enter your Name' value="<?php echo $name; ?>">
                <input type="email" name='Email' class='mail' required placeholder='Enter your Mail'
                  value="<?php echo $email; ?>">
                <input type="text" name='Password' required class='password' placeholder='Enter your Password'
                  value="<?php echo $password; ?>">
                <button type="submit" name='submit' class="btn btn-default btn-lg">Register</button>
                <a href="/user/login">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>


</body>

</html>