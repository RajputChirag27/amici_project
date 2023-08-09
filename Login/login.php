<?php 
include '../include_common/header.php';
include '../connection.inc.php';



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
  $_SESSION['customer_id'] = $result->fetch_assoc()['id'];

  if(isset($_SESSION['address'])){
    header('Location: ../Index/index.php');
  } else
    header('Location: ../Address/address.php');
} else if ($result->num_rows == 0) {
    // Go to Login page
echo "<script>alert('Invalid Email or Password')</script>";
}
}

$conn->close();
?>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="../style/style.css" />
</head>


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
        <a href="../Signup/signup.php">Sign Up</a>
      </div>
    </div>
    </div>
<?php include '../include_common/footer.php';
?>
