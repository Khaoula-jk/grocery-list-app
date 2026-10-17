<?php
include 'includes/auth.php'; 
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>HomePage</title>
</head>
<body>
  <div class="logout">
    <button class="logout-button" type="button" onclick="window.location.href='logout.php'">Log Out</button>
  </div>
  <div class="items-list">
    <h2>Grocery list</h2>
    <form action="actions.php" method="POST">
    <div class="row">
      <input type="text" id="input-box" name="item_name" placeholder="Add your item" required>
      <button type="submit" name="addItem">Add</button>
    </div>
    </form>
    <ul>
    <?php
      $user_id = $_SESSION['user_id'];
      $get_data = "SELECT * FROM items WHERE user_id = '$user_id'";
      $query = mysqli_query($connect, $get_data);
      while($row = mysqli_fetch_object($query)){
        echo "<li><div class='item-name'>". $row->item_name ."</div><form action='actions.php' method='POST'>
                                          <input type='hidden' name='id' value='". $row->item_id ."'>
                                          <button type='submit' name='action' value='delete'>Delete</button>
                                          </form></li>";
      }

    ?>
    </ul>
  </div>
</body>
</html>