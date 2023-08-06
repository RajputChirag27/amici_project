
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
      integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e"
      crossorigin="anonymous"
    />

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"
  ></script>

  <script src="script.js"></script>

    <link rel="stylesheet" href="../style/style.css" />
  </head>
  <body>

  <?php 
$servername = 'localhost';
$username = 'root';
$password = 'chirag';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection

// Get email and password from Login page

if ($conn->connect_error) {
    header('Location: ../Login/login.php');
    die('Connection failed:'.$conn->connect_error);

    
    // Go to Login page
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = md5($_POST['password']);


// validate email and password from database
$sql = "SELECT * FROM `amici`.`customer` WHERE `email` = '$email' AND `password` = '$pass'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $pass;
    header('Location: ../Address/address.php');
} else if ($result->num_rows == 0) {
    // Go to Login page
echo "<script>alert('Invalid Email or Password')</script>";
}
}

$conn->close();
?>



    <div class="main">
      <div class="logo"></div>
      <div class="title">Login</div>
      <form action="" method="post">
        <div class="credentials">
          <div class="email">
            <i
              class='bi-envelope-fill  credential-icon'
             
            ></i>
            <input
              type="text"
              name="email"
              id="email"
              placeholder="Email"
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
        <button class="submit" id="submit" name='submit'>Login</button>
      </form>
      <div class="link">
        <a href="#">Forgot Password?</a> &nbsp;&nbsp;&nbsp;&nbsp; 
        <a href="../Signup/signup.html">Sign Up</a>
      </div>
    </div>
    
  </body>


  
</html>
