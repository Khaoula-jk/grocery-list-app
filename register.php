<?php
include 'config.php';

if (isset($_POST['signUp'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $checkEmail = "SELECT * FROM users WHERE email = '$email'";
  $result = $connect->query($checkEmail);
  if($result->num_rows > 0){
    echo "Email Address Already Exists !";
  }else{
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $insert_query = "INSERT INTO users(username, email, password) VALUES('$username','$email','$hash_password')";

    if($connect->query($insert_query) == TRUE){
      header('location: index.php');
    }else{
      echo "Error: ".$connect->error;
    }
  }
}

if(isset($_POST['signIn'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = $connect->query($query);
  
  if($result->num_rows < 1){
    echo "A User with this Email doesn't exist !";
  }else{
    session_start();
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $row['email'];
    $hash = $row['password'];
    if(password_verify($password, $hash)){
      header('location: index.php');
      exit();
    }else{
      echo "Wrong Password !";
    }
  }
}
?>