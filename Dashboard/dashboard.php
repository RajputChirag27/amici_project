<?php
include '../connection.inc.php';
include '../include_common/header.php';
?>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/dashboard.css" />
</head>


<div class="primary-heading">
    <h1 class="primary-heading mt-5">
        Ticketing System
    </h1>

    <button type="submit" name="submit" class="btn btn-primary px-3 m-5  rounded-3">
    <a href="../CRUD/insert.php" class="btn btn-primary text-light">Add Complaint</a>
</button>

</div>




<table class="table table-dark table-hover w-100">
    <thead>
        <tr>

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
    </thead>


</table>

<?php
include '../include_common/footer.php';
?>
</body>

</html>