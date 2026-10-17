<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Sign In</title>
</head>
<body>
  <div class="container" id="signin">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <input type="email" name="email" id="email" placeholder="Email" required>
        
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" placeholder="Password" required>
      </div>
      <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <div class="links">
      <p>Don't have an account ?</p>
      <button type="button" id="signUpButton" onclick="window.location.href = 'signUp.php'">Sign Up</button>
    </div>
  </div>
</body>
</html>