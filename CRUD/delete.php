<?php
include '../include_common/header.php';
include '../connection.inc.php';
?>

<head>
  <title>Update</title>
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
          <span
            class="
              form-label
              d-block
              text-light
              border-secondary
              bg-transparent
            "
            >Are you sure you want to delete?</span
          >
          

        <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary px-3 rounded-3">
            Yes
            </button>
        </label>

          <button class="btn btn-primary px-3 rounded-3 link">
            <a href="../Dashboard/dashboard.php" class="text-light">No</a>
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

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Error.";
    exit();
}

if(isset($_POST['submit'])){

// $complaint = $_POST['message'];
// $customer_id = $_SESSION['dashboard_id'];
// echo $complaint;

// delete row in the table where id = $id

$sql = "DELETE FROM customer_complaint WHERE id = $id";

  $result = mysqli_query($conn, $sql);
  if($sql){
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

// Update.php

