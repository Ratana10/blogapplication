<?php
// include "../config/conn.php";

require_once(dirname(__FILE__) . '/../config/conn.php');

interface UserService
{
  public function register($user);
  public function login($username, $password);
}

class UserServiceImpl implements UserService
{
  private $sql;

  public function register($user)
  {
    global $conn;

    $this->sql = "INSERT INTO users (name, gender, username, password) VALUES (
      '" . $user->getName() . "', 
      '" . $user->getGender() . "', 
      '" . $user->getUsername() . "', 
      '" . $user->getPassword() . "')";

    // $this->sql = "SELECT * FROM users";

    if ($conn->query($this->sql) === TRUE) {
      error_log("new record created successfully");
    } else {
      error_log("Error: " . $this->sql . "<br>" . $conn->error);
    }
  }

  public function login($username, $password)
  {
    global $conn;
    $this->sql = "SELECT * FROM users WHERE username= '$username' AND password = '$password' ";
    if ($result = $conn->query($this->sql)) {
      $user = $result->fetch_assoc();
      
      $user = new User($user['id'], $user['name'], $user['gender'], $user['username'], $user['password']);

      echo $user->toString();
      echo "login successfully";
    } else {
      echo "Error: " . $this->sql . "<br>" . $conn->error;
    }
  }
}
