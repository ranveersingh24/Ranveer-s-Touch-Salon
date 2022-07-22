<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "icon" href = "../Salon_Logo.jpg" type = "image/x-icon">
  <title>Login Admin Panel</title>
  <link rel="stylesheet" href="login-page.css">
</head>

<body>
  <main id="main-holder">
      <div class="container"> 
      <a class="button button1" href="../BeautyHairSalon.php">Back to Salon homepage</a><br>
      </div>
      
      <h1 id="login-header">Admin Panel - Ranveer's Touch</h1>
      <h1 id="login-header">Login</h1>
 
    <div id="login-error-msg-holder">
      <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
    </div>
    
    <form action="Login_insert.php" id="login-form" method="POST">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
      <input type="submit" value="Login" id="login-form-submit">
    </form>
  
  </main>
</body>

</html>
