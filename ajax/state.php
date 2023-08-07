<?php

include '../connection.inc.php';
$country_id = $_POST['country_data'];

$state = "SELECT * FROM states WHERE country_id = '$country_id'";

$state_result = mysqli_query($conn, $state);

$output = '<option value="" class="text-dark" >Select State</option>';

while ($row = mysqli_fetch_assoc($state_result)) {
    $output .= '<option value="' . $row['id'] . '" class="text-dark" >' . $row['name'] . '</option>';
} 

echo $output;

?>
