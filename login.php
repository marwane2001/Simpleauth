<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body { font-family: Arial; background:#f2f2f2; }
    form { width:300px; margin:100px auto; padding:20px; background:#fff; border:1px solid #ccc; }
    input { width:100%; padding:10px; margin:5px 0; }
    button { width:100%; padding:10px; background:#4CAF50; color:#fff; border:none; }
  </style>
</head>
<body>
  <form action="login_process.php" method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
    <p>Don’t have an account? <a href="register.php">Register</a></p>
  </form>
</body>
</html>
