<?php
include '../connection.inc.php';
include '../include_common/header.php';
?>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/dashboard.css" />
</head>


<div class="primary-heading">
    <h1 class="primary-heading mt-5 text-light">
        Ticketing System
    </h1>

    <button type="submit" name="submit" class="btn btn-primary px-3 m-5  rounded-3">
    <a href="../CRUD/insert.php" class="btn btn-primary text-light">Add Complaint</a>
</button>

</div>

<table class="table table-dark table-hover w-100">
    <thead>
        <tr >
            <th>
                Address
            </th>
            <th>
                Date
            </th>
            <th>
                Complaint
            </th>
            <th>
                Update
            </th>
            <th>
                Delete
            </th>

        </tr>

        <?php
        echo "<br>";
        $sql = "SELECT * FROM customer_complaint where customer_id = {$_SESSION['customer_id']} ";
        $result = mysqli_query($conn, $sql);
        $dashboard_id = mysqli_fetch_assoc($result);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['customer_address_id'] . "</td>";
            echo "<td>" . $row['create_date'] . "</td>";
            echo "<td>" . $row['complaint'] . "</td>";
            echo "<td>" . "<a href='../CRUD/update.php?id=" . $row['id'] . "' class='btn btn-primary'>Update</a>" . "</td>";
            echo "<td>" . "<a href='../CRUD/delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>" . "</td>";
            echo "</tr>";
            
        }
        // set pagination
        ?>

    </thead>


</table>

<?php
include '../include_common/footer.php';
?>
</body>

</html>