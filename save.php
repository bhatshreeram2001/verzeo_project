<?php
$owner_name = $_POST['owner_name'];
$vehicle_name = $_POST['vehicle_name'];
$vehicle_number = $_POST['vehicle_number'];
$entry_time = $_POST['entry_date'];
$exit_time = $_POST['exit_date'];

$conn = mysqli_connect("localhost", "root", "", "parking") or die("connection failed!");
$sql = "INSERT INTO parking.vehicle_info(owner_name, vehicle_name, vehicle_no, entry_time, exit_time) VALUES('{$owner_name}', '{$vehicle_name}', '{$vehicle_number}', '{$entry_date}', '{$exit_date}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");

header("location: http://localhost/ParkingManagement/index.php");
mysqli_close($conn);
?>