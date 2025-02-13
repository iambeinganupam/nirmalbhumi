<?php
session_start();

if (isset($_SESSION['email'])) {
  header("location:home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
      <h1>Register</h1>
      <div class="input-box">
        <input type="text" name="name" placeholder="Full Name" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="email" name="email" placeholder="Email" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" name="pass1" placeholder="Create Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <!--<div class="input-box">
        <input type="password" name="pass2" placeholder="Confirm Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>-->
      <button type="submit" name="register" class="btn">Register</button>
      <div class="register-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>

  <!-- backend in php is done by ANUPAM -->
  <?php
  if (isset($_POST['register'])) {
    include "backend/connect_db.php";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass1']);
    $tokenid = bin2hex(random_bytes(15));

    $encrypt_password = sha1($password);

    $search_email = "SELECT * FROM users WHERE email = '$email'";

    $search_email_query = mysqli_query($conn, $search_email);

    $email_count = mysqli_num_rows($search_email_query);

    $search_username = "SELECT * FROM users WHERE username = '$username'";

    $search_username_query = mysqli_query($conn, $search_username);

    $username_count = mysqli_num_rows($search_username_query);

    if ($email_count > 0 or $username_count > 0) {
  ?>
      <script>
        alert("Account with this email id or username already exists!");
      </script>
      <?php
    } else {

      $insert_data = "INSERT INTO users (serial, name, username, email, password, token_id, registration_time) VALUES (NULL, '$name', '$username', '$email', '$encrypt_password', '$tokenid', current_timestamp())";

      $insert_data_query = mysqli_query($conn, $insert_data);

      if ($insert_data_query) {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['token_id'] = $tokenid;

        // write code for email verification here (expected by anupam)
      ?>
        <script>
          location.replace("home.php");
        </script>
      <?php
      } else {
      ?>
        <script>
          alert("Sign Up failed!");
        </script>
  <?php
      }
    }
  }
  ?>
</body>

</html>