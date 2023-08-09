<?php
include '../include_common/header.php';
include '../connection.inc.php';
?>

<head>
  <title>Address</title>
  <link rel="stylesheet" href="../style/style.css" />
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
          <select class="form-control border-secondary bg-transparent text-light">
            <option value="default" class="text-light" selected disabled>
              Select Address
            </option>
            <?php
            $sql = "SELECT * FROM customer_address";
            $result = mysqli_query($conn, $sql);
            // while ($row = mysqli_fetch_assoc($result)) {
            //   echo "<option value='" . $row['id'] . "' class='text-light'> " . $row['address1'] . "</option>";
            // }
            ?>

<?php
            while ($row = mysqli_fetch_assoc($result)): ?>
              <option class="text-dark" value="<?php echo $row['id']; ?>"> <?php echo $row['address'].",".$row['street'].",".$row['city'].",".$row['state'].",".$row['country']; ?> </option>
            <?php endwhile; ?>

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
          <button type="submit" class="btn btn-primary px-3 rounded-3">
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

<?php
include '../include_common/footer.php';
?>