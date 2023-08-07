<?php
include '../include_common/header.php';
include '../connection.inc.php';


$country = "SELECT * FROM countries";
$country_result = mysqli_query($conn, $country);

?>

<head>
  <title>Address</title>
  <link rel="stylesheet" href="../style/address.css" />
  <?php
include '../connection.inc.php';



if (isset($_POST['submit'])) {

  // echo $_SESSION['customer_id'];
  // echo "<br>";
  // echo $_POST['address1'];
  // echo "<br>";
  // echo $_POST['address2'];
  // echo "<br>";
  // echo $_POST['country'];
  // echo "<br>";
  // echo $_POST['state'];
  // echo "<br>";
  // echo $_POST['city'];

  $countryId = $_POST['country'];
  $stateId = $_POST['state'];
  $cityId = $_POST['city'];

  $countryQuery = "SELECT name FROM countries WHERE id = '$countryId'";
  $countryResult = $conn->query($countryQuery);
  $countryName = $countryResult->fetch_assoc()['name'];

  $stateQuery = "SELECT name FROM states WHERE id = '$stateId'";
  $stateResult = $conn->query($stateQuery);
  $stateName = $stateResult->fetch_assoc()['name'];


  $cityQuery = "SELECT name FROM cities WHERE id = '$cityId'";
  $cityResult = $conn->query($cityQuery);
  $cityName = $cityResult->fetch_assoc()['name'];

  $query = "INSERT INTO customer_address (customer_id, address, street, country, state, city) VALUES ('$_SESSION[customer_id]', '$_POST[address1]', '$_POST[address2]', '$countryName', '$stateName', '$cityName')";


  $result = mysqli_query($conn, $query);

  if ($conn->query($query) === TRUE) {
    // echo "New record created successfully";
    header("Location: ../index.php");
  } else {
    // echo "Please go to Login page";
    header("Location: ../Address/address.php");
  }
}
$conn->close();
?>

</head>

<div class="containe">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
      <form method="POST" class="
              w-100
              rounded-3
              p-4
              shadow-lg
              border
              text-secondary
              bg-dark
              border-secondary
            " action="">
        <div class="primary-heading">
          <div class="logo"></div>
          <div class="title">Address</div>
        </div>
        <label class="d-block mb-2">
          <span class="form-label d-block text-light">Address</span>
          <input name="address1" type="text" class="form-control text-light border-secondary bg-transparent"
            placeholder="" />
        </label>

        <label class="d-block mb-2">
          <span class="form-label d-block text-light">Street</span>
          <input name="address2" type="text" class="form-control text-light border-secondary bg-transparent"
            placeholder="" />
        </label>



        <label class="d-block mb-2">
          <span class="form-label d-block text-light">Country</span>
          <select name="country" class="form-select text-light border-secondary bg-transparent" id="country"
            name="country">
            <option value="default" class="text-dark" selected disabled>Select Country</option>
            <?php
            while ($row = mysqli_fetch_assoc($country_result)): ?>
              <option class="text-dark" value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
            <?php endwhile; ?>
          </select>

        </label>

        <label class="d-block mb-2">
          <span class="form-label d-block text-light">State</span>
          <select name="state" class="form-select text-light border-secondary bg-transparent" id="state" name="state">
            <option value="default" class="text-dark" selected disabled>Select State</option>
          </select>

        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block text-light">City</span>
          <select name="city" class="form-select text-light border-secondary bg-transparent" id="city">
            <option value="India" class="text-dark" selected disabled>Select City</option>
          </select>

        </label>


        <div class="mb-3">
          <button type="submit" name="submit" class="btn btn-primary px-3 rounded-3">
            Save Address
          </button>
        </div>
    </div>
  </div>
  </form>
</div>
</div>
</div>

<?php
include '../include_common/footer.php';
?>


<script src="script.js"></script>