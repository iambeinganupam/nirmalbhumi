<?php
session_start();

if (isset($_SESSION['email'])) {
  header("location:home.php");
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: url(static/images/webpage.jpg) no-repeat;
      background-size: cover;
      background-position: center;
    }

    .wrapper {
      width: 420px;
      background: transparent;
      border: 2px solid rgba(255, 255, 255, .2);
      backdrop-filter: blur(9px);
      color: #fff;
      border-radius: 12px;
      padding: 40px 40px;
    }

    .wrapper h1 {
      font-size: 36px;
      text-align: center;
    }

    .wrapper .input-box {
      position: relative;
      width: 100%;
      height: 50px;

      margin: 30px 0;
    }

    .input-box input {
      width: 100%;
      height: 100%;
      background: transparent;
      border: none;
      outline: none;
      border: 2px solid rgba(255, 255, 255, .2);
      border-radius: 40px;
      font-size: 16px;
      color: #fff;
      padding: 20px 45px 20px 20px;
    }

    .input-box input::placeholder {
      color: #fff;
    }

    .input-box i {
      position: absolute;
      right: 20px;
      top: 30%;
      transform: translate(-50%);
      font-size: 20px;

    }

    .wrapper .remember-forgot {
      display: flex;
      justify-content: space-between;
      font-size: 14.5px;
      margin: -15px 0 15px;
    }

    .remember-forgot label input {
      accent-color: #fff;
      margin-right: 3px;

    }

    .remember-forgot a {
      color: #fff;
      text-decoration: none;

    }

    .remember-forgot a:hover {
      text-decoration: underline;
    }

    .wrapper .btn {
      width: 100%;
      height: 45px;
      background: #fff;
      border: none;
      outline: none;
      border-radius: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: #333;
      font-weight: 600;
    }

    .wrapper .register-link {
      font-size: 14.5px;
      text-align: center;
      margin: 20px 0 15px;

    }

    .register-link p a {
      color: #fff;
      text-decoration: none;
      font-weight: 600;
    }

    .register-link p a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
      <h1>Reset Password</h1>
      <div class="input-box">
        <input type="password" name="pass" placeholder="Enter new password..." required>
        <i class='bx bxs-lock'></i>
      </div>
      <button type="submit" name="reset" class="btn">Reset</button>
    </form>
  </div>

  <?php

  if (isset($_POST['reset'])) {
    include "backend/connect_db.php";
    $new_password = mysqli_real_escape_string($conn, $_POST['pass']);

    $encryption = sha1($new_password);

    $change_password = "UPDATE users SET password = '$encryption' where token_id = '$id'";
    $update_query = mysqli_query($con, $change_password);

  ?>
        <script>
          alert("Password successfully changed");
          location.replace("login.php");
        </script>
      <?php
    } 
  ?>
  
</body>


</html>