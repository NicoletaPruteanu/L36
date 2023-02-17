<!DOCTYPE html>
<html>
<head>
 <title>Logare</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 <style>
  body {
   background-color: #f8f8;
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  .container {
   background-color: #fff;
   box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
   border-radius: 5px;
   padding: 30px;
   margin: 100px auto;
   max-width: 400px;
   text-align: center;
  }
  h1 {
   color: #673;
   font-size: 28px;
   margin-bottom: 30px;
  }
  input[type="text"], input[type="password"] {
   padding: 10px 15px;
   width: 100%;
   margin-bottom: 20px;
   border: none;
   border-radius: 5px;
   background-color: #f564f4;
   font-size: 16px;
   color: #333;
  }
  input[type="submit"] {
   background-color: #1a73e8;
   color: #fff;
   border: none;
   border-radius: 5px;
   padding: 10px 20px;
   font-size: 16px;
   cursor: pointer;
   transition: background-color 0.3s;
  }
  input[type="submit"]:hover {
   background-color: #0d47a1;
  }
  .form-group {
   text-align: left;
   margin-bottom: 20px;
   position: relative;
  }
  .form-group label {
   position: absolute;
   top: 50%;
   left: 15px;
   transform: translateY(-50%);
   font-size: 16px;
   color: #0d47a1;
   transition: all 0.3s;
   pointer-events: none;
  }
  .form-group input:focus ~ label,
  .form-group input:valid ~ label {
   top: 5px;
   left: 10px;
   font-size: 14px;
   color: #13e8;
  }
  .form-group input:focus,
  .form-group input:valid {
   border-color: #1a73e8;
  }
  .form-group i {
   position: absolute;
   top: 50%;
   right: 15px;
   transform: translateY(-50%);
   color: #7a1;
  }
 </style>
</head>
<body>
 <div class="container">
  <h1>Logare</h1>
  <form>
   <div class="form-group">
    <input type="text" id="username" name="username" required>
    <label for="username">Nume utilizator</label>
    <i class="fas fa-user"></i>
   </div>
   <div class="form-group">
    <input type="password" id="password" name="password" required>
    <label for="password">Parola</label>
    <i class="fas fa-lock"></i>
   </div>
   <input type="submit" value="Logare">
  </form>
 </div>
</body>
</html>


<?php
$valid_passwords = array ("mario" => "carbonell");
$valid_users = array_keys($valid_passwords);
 
$user = $_SERVER[ 'PHP_AUTH_USER'];
$pass = $_SERVER[ 'PHP_AUTH_PW'];
$validated = (in_array ($user, $valid_users)) && ($pass == $valid_passwords [$user]);
if (!$validated) {
header ('WWW-Authenticate: Basic realm="My Realm"');
header ('HTTP/1.0 401 Unauthorized');
die ("Not authorized");
}
echo "<p>Welcome $user.‹/p>";
echo "<p>Congratulation, you are into the system.</p>";
?>


