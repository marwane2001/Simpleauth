<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <style>
    body { font-family: Arial; background:#f2f2f2; }
    form { width:300px; margin:100px auto; padding:20px; background:#fff; border:1px solid #ccc; }
    input { width:100%; padding:10px; margin:5px 0; }
    button { width:100%; padding:10px; background:#2196F3; color:#fff; border:none; }
  </style>
</head>
<body>
  <form action="register_process.php" method="POST">
    <h2>Register</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </form>
</body>
</html>
