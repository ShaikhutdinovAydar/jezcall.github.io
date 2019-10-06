<?php
include_once(ROOT . '/models/User.php');
class UserController {

  public function actionRegister() 
  {
    $name = '';
    $email = '';
    $password = '';
    $result = false;

    
    if ( isset($_POST['submit']) ) {
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $password = $_POST['Password'];

      $errors = false;

      if (User::checkEmailExists($email)) {
        $errors[] = 'A user with this email already exists...';
      }

      if (!User::checkName($name)) {
        $errors[] = 'Wrong name...';
      }


      if (!User::checkEmail($email)) {
        $errors[] = 'Wrong Email...';
      }


      if (!User::checkPassword($password)) {
        $errors[] = 'Password must be at least 6 characters long...';
      }


      if ($errors == false) {
        // TO DO
        $result = User::register($name, $email, $password);

      }
    }


    require_once( ROOT.'/views/user/register.php');


    return true;
  }


  public function actionLogin()
  {
    $email = '';
    $password = '';

    if (isset($_POST['submit'])) {
      $email = $_POST['Email'];
      $password = $_POST['Password'];

      $errors = false;

      // check exists user
      $userId = User::checkUserData($email, $password);
      $adminId = User::checkAdminData($email, $password);

      if ($userId == false && $adminId == false){
        $errors[] = 'Incorrect login information, incorect login or password...';
      }else if($adminId == true) {
        User::auth($adminId);
        header('Location: /');
      }
      else {
        // если данные правильные запоминаем пользователя в (сессии)
        User::auth($userId);
        header('Location: /');
      }
    }
    require_once( ROOT.'/views/user/login.php');


    return true;
  }
  public function actionLogout(){

    unset($_SESSION['user']);
    header('Location: /');
  }
}
?>