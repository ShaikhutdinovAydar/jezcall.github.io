<?php 

class User {
  public static function register($name, $email, $password){
    
    $db = Db::getConnection();

    $sql = 'INSERT INTO users (name, mail, password) VALUES (:name, :email, :password)';

    $result = $db->prepare($sql);
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);

    return $result->execute();
  }

  public static function checkName($name) {
    if (strlen($name) >= 2) {
      return true;
    }
    return false;
  }


  public static function checkEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return true;
    }
    return false;
  }

  public static function checkPassword($password) {
    if (strlen($password) >= 6) {
      return true;
    }
    return false;
  }

  public static function checkEmailExists($email) {

    $db = Db::getConnection();

    $sql = 'SELECT COUNT(*) FROM users WHERE  mail= :email';

    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->execute();

    if($result->fetchColumn()) {
      return true;
    }
    return false;

  }


  // проверяем существует ли пользователь с заданным email и password
  public static function checkUserData($email, $password) {
    $db = Db::getConnection();

    $sql = 'SELECT * FROM users WHERE mail = :email AND password = :password';

    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_INT);
    $result->bindParam(':password', $password, PDO::PARAM_INT);
    $result->execute();

    $user = $result->fetch();
    if($user) {
      return $user['id'];
    }
    return false;
  }

  public static function checkAdminData($email, $password) {
    $db = Db::getConnection();

    $sql = 'SELECT * FROM admins WHERE mail = :email AND password = :password';

    $result = $db->prepare($sql);
    $result->bindParam(':email', $email, PDO::PARAM_INT);
    $result->bindParam(':password', $password, PDO::PARAM_INT);
    $result->execute();

    $user = $result->fetch();
    if($user) {
      return $user['id'];
    }
    return false;
  }

  // запоминаем пользователя
  public static function auth($userId)
  {
    $_SESSION['user'] = $userId;

  }

  public static function checkLogged(){
    
    if (isset($_SESSION['user'])) {
      return $_SESSION['user'];
    }
    return false;
  }

  public static function getUserById($userId){
      if ($userId) {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE id= :id';

        $res = $db->prepare($sql);
        $res->bindParam(':id', $userId, PDO::PARAM_INT);

        // Указываем что хотим получить данные в виде массива
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $res->execute();

        return $res->fetch();
      }
  }

  public static function edit($id, $name, $password) {
    $db = Db::getConnection();
    $sql = 'UPDATE users SET name= :name, password = :password WHERE id = :id';

    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->bindParam(':name', $name, PDO::PARAM_INT);
    $result->bindParam(':password', $password, PDO::PARAM_INT);
    return $result->execute();
  }
}


?>