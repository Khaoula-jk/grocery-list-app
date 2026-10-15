<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Register</title>
</head>
<body>
  <div class="container" id="signup">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <input type="text" name="username" id="username" placeholder="Username" required>
        
      </div>
      <div class="input-group">
        <input type="email" name="email" id="email" placeholder="Email" required>
        
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" placeholder="Password" required>
        
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <div class="links">
      <p>Already have an account ?</p>
      <button type="button" id="signInButton" onclick="window.location.href = 'signIn.php'">Sign In</button>
    </div>
  </div>
</body>
</html>