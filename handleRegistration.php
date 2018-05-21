<?php
  require 'database.php';
?>

<?php
  if (isset($_POST['username'])) {

  $un = mysqli_real_escape_string($connection, $_POST['username']);
  $em = mysqli_real_escape_string($connection, $_POST['mail']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);

  function randomSalt() {
    return substr(sha1(mt_rand()),0,22); // hämtat från https://code.tutsplus.com/tutorials/understanding-hash-functions-and-keeping-passwords-safe--net-17577
  }

  function getEmail($email, $connection) {
    $query = "SELECT email FROM registration WHERE email = '".$email."' ";
    $result = $connection->query($query);
    $email = $result->fetch_assoc();
    return $email['email'];
  }


  

  $random_salt = randomSalt();



  $hash = getHash($password, $random_salt);

    if (trim($_POST['username']) == "" || trim($_POST['password']) == "" || validEmail())
  {
      //echo 'Felaktig email';
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


else echo 'Unathorized acces';
header('Refresh: 4; registration.php');

?>
