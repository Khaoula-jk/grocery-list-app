<?php
// include 'includes/auth.php'; 
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
    <button id="logoutButton" type="button" onclick="window.location.href='logout.php'">Log Out</button>
  </div>
  <div class="items-list">
    <h2>Items list</h2>
    <div class="row">
      <input type="text" id="input-box" placeholder="Add your item">
      <button>Add</button>
    </div>
    
  </div>
</body>
</html>