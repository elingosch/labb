<?php
  include 'include/bootstrap.php';

  if (isset($_POST['username'])) {

  $un = mysqli_real_escape_string($connection, $_POST['username']);
  $em = mysqli_real_escape_string($connection, $_POST['mail']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $random_salt = randomSalt();
  $hash = getHash($password, $random_salt);

    if (trim($_POST['username']) == "" || trim($_POST['password']) == "" || validEmail())
  {
      header('Location: registration.php');
  }

  else {

    if($em != getEmail($em, $connection)) {
      $query = "INSERT INTO registration(email, username, password, salt) VALUES ('$em', '$un', '$hash', '$random_salt')";
      $connection->query($query);
      header('Location: index.php');

    }
    
    else {
          echo 'Emailadressen finns redan!';
      }
    }
  }


else echo '<div id="unathorized"> Du har inte behörighet att se denna sida, registrera dig först!</div>';
header('Refresh: 4; registration.php');

?>
