<?php
include '../connection.inc.php'; 
$state_id = $_POST['state_data'];

$city = "SELECT * FROM cities WHERE state_id = '$state_id'";

$city_result = mysqli_query($conn, $city);

$output = '<option value="" class="text-dark" >Select City</option>';

while ($row = mysqli_fetch_assoc($city_result)) {
    $output .= '<option value="' . $row['id'] . '" class="text-dark" name="state">' . $row['name'] . '</option>';
} 

echo $output;

?>