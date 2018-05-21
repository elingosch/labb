<?php
  include 'database.php';

if (isset($_POST['e-mail'])) {

  function getSalt($email,$connection) {
    $query = "SELECT salt FROM registration WHERE email = '".$email."' ";
    $result = $connection->query($query);
    $salt = $result->fetch_assoc();
    return $salt['salt'];
  }

  function getPassword($email,$connection) {
    $query = "SELECT password FROM registration WHERE email = '".$email."' ";
    $result = $connection->query($query);
    $password = $result->fetch_assoc();
    return $password['password'];

  
  }

  function getUser($email, $connection) {
    $query = "SELECT username FROM registration WHERE email = '".$email."' ";
    $result = $connection->query($query);
    $user = $result->fetch_assoc();
    return $user['username'];
  }

    $email = mysqli_real_escape_string($connection, $_POST['e-mail']);
    $password2 = mysqli_real_escape_string($connection, $_POST['password']);
    $salt = getSalt($email, $connection);
    $hash_pass = sha1($salt .$password2);
    $username = getUser($email, $connection);

    if ($hash_pass === getPassword($email,$connection)) {
      session_start();
      $_SESSION['email'] = $email;

      $_SESSION['username'] = $username;
      header('Location: index.php');
    }
}

else echo 'Unathorized access';
header('Refresh: 4; login.php');


?>
