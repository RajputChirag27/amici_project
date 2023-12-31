<?php
include '../include_common/header.php';
include '../connection.inc.php';
?>

<head>
  <title>Address</title>
  <link rel="stylesheet" href="../style/style.css" />
  <?php
  ob_start();
?>
</head>

<div class="container mt-5 mb-5">
  <div class="row mx-0 justify-content-center">
    <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
      <form
        method="POST"
        class="
          w-100
          rounded-1
          p-4
          border
          text-secondary
          bg-dark
          border-secondary
        "
        action=""
        method='POST'
      >
        <label class="d-block mb-4">
          <span class="form-label d-block text-light">Address</span>
          <select class="form-control border-secondary bg-transparent text-light" name="customer_add_id">
            <option value="default" class="text-light" selected disabled>
              Select Address
            </option>
            <?php
            $sql = "SELECT * FROM customer_address where customer_id = {$_SESSION['customer_id']}";
            $result = mysqli_query($conn, $sql);
            ?>

<?php
            while ($row = mysqli_fetch_assoc($result)): ?>
           
              <option class="text-dark" value="<?php echo $row['id']; ?>"> <?php echo $row['address'].",".$row['street'].",".$row['city'].",".$row['state'].",".$row['country']; 
              ?> </option>
              <?php 
              $_SESSION['$customer_address_idd'] = $row['id'];
              ?>
            <?php endwhile; 
            ?>

          </select>
        </label>

        <label class="d-block mb-4">
          <span
            class="
              form-label
              d-block
              text-light
              border-secondary
              bg-transparent
            "
            >What's wrong?</span
          >
          <textarea
            name="message"
            class="form-control border-secondary bg-light text-dark"
            rows="3"
            placeholder="Please describe your problem"
          ></textarea>
        </label>

        <div class="mb-3">
          <button type="submit" name="submit" class="btn btn-primary px-3 rounded-3">
            Submit
          </button>
        </div>

        <div class="d-block text-end">
          <div class="small text-white-50">
            by
            <a
              href="#"
              class="text-decoration-none text-white-50"
              target="_blank"
              >Ticketing System</a
            >
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div>
<?php

if(isset($_POST['submit'])){

$complaint = $_POST['message'];
$customer_id = $_SESSION['customer_id'];
$customer_address_id = (int) $_POST['customer_add_id'];


// echo $customer_id;
// echo $customer_address_id;
// echo $complaint;

  $sql = "INSERT INTO customer_complaint (customer_id,customer_address_id,create_date, update_date, complaint) VALUES ('$customer_id','$customer_address_id',now(),now(),'$complaint')";
  $result = mysqli_query($conn, $sql);
  if($sql){
    echo "Data Inserted";
    ob_clean();
    header("Location: ../Dashboard/dashboard.php");
  }else{
    echo "Data Not Inserted";
  }
}

?>

</div>

<?php
include '../include_common/footer.php';
?>