<?php
include 'conn.php';
$c_id = $_GET['can_id'];
$v_id = $_GET['v_id'];
$p_id = $_GET['p_id'];

$sql = "INSERT INTO `votes`( `voters_id`, `candidate_id`, `position_id`) VALUES ('$v_id','$c_id','$p_id')";
if (mysqli_query($con, $sql)) {
    echo '<script>alert("Your Vote Succesfully submitted !!")</script>';
    echo "<script> location.href='http://localhost/ovs-1/admin/index.php';</script>";
} else {
    echo '<script>alert("Unexpected Error occured !!!")</script>';
    echo "<script> location.href='http://localhost/ovs-1/admin/index.php';</script>";
}
