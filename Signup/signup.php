<?php
include '../connection.inc.php';
include '../include_common/header.php';

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  if(isset($_POST['submit'])){
  $name = $_POST['username'];
  $email = $_POST['email'];
  $pass = md5($_POST['password']);
  
  
  // insert data into database
  $sql = "INSERT INTO `amici`.`customer` (`customer_name`, `email`, `password`) VALUES ('$name', '$email', '$pass');";
  
  if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("Location: ../Login/login.php");
  } else {
    // echo "Please go to Login page";
    header("Location: ../Login/login.php");
  }
}
  $conn->close();
  
  ?>

<head>
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="../style/style.css" />
</head>

  <body>
    <div class="main">
        <div class="logo"></div>
      <div class="title">Sign Up</div>
      <form action="" method="post">
        <div class="credentials">
          <div class="username">
            <i
              class="bi bi-person-fill credential-icon"
            ></i>
            <input
              type="text"
              name="username"
              placeholder="Username"
              required
            />
          </div>
          <div class="email">
            <i
              class="bi bi-envelope-fill credential-icon"

            ></i>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Email Address"
              required
            />
          </div>
          <div class="password">
            <i
              class="bi bi-lock-fill credential-icon"
            ></i>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
              required
            />
          </div>
        </div>
        <button class="submit">Sign Up</button>
      </form>
      <div class="link">
        <a href="#">Already a User?</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="../Login/login.php">Login</a>
      </div>
    </div>

    <?php
include '../include_common/footer.php';
?>
  
