<?php
include 'includes/auth.php';
include 'config.php';

if(isset($_POST['addItem'])){
  $item_name = $_POST['item_name'];
  $user_id = $_SESSION['user_id'];

  $add = "INSERT INTO items(user_id, item_name) VALUES('$user_id','$item_name')";
  $result = $connect->query($add);
  
  if($result){
    header('location: index.php');
    exit();
  }else{
    echo "Error: ". $connect->error;
  }
}

if(isset($_POST['action'])){
  if($_POST['action'] == 'delete'){
    $item_id = $_POST['id'];
    $user_id = $_SESSION['user_id'];

    $delete = "DELETE FROM items WHERE item_id = '$item_id' AND user_id ='$user_id'";
    $result = $connect->query($delete);
    if ($result){
      header('location: index.php');
      exit();
    }else{
      echo "Error: ". $connect->error;
    }
  }

}

?>