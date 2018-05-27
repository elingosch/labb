<?php
  include 'include/bootstrap.php';

if (isset($_POST['e-mail'])) {


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

else echo '<div id="unathorized">Du har inte behörighet att se denna sida, logga in först!</div>';
header('Refresh: 4; login.php');


?>
