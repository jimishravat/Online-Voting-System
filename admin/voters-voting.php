<?php
$condition = false;
if (isset($_POST["email"], $_POST["password"])) {
    include 'conn.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result1 = mysqli_query($con, "SELECT voters_id,id, password FROM voters WHERE voters_id = '$email' AND password = '$password'");
    $rows = mysqli_num_rows($result1);
    $condition = false;
    $h = $result1->fetch_array();
    $vo_id = $h['id'];
    if ($rows > 0) {
        $condition = true;
        $candidate = mysqli_query($con, "SELECT candidates.firstname as f_name, candidates.lastname as l_name, candidates.id as id_candidate,positions.id as pos_id, positions.position_name as pos_name from candidates,positions where positions.id=candidates.position_id");
        
        
        $if_votes = mysqli_query($con, "SELECT voters_id from votes where voters_id = $vo_id");
        
        $if_votes_row = mysqli_num_rows($if_votes);
        if ($if_votes_row > 0) {
            echo '<script>alert("You have already Voted once !!!")</script>';
            echo "<script> location.href='http://localhost/ovs-1/admin/login.php';</script>";
        }
    } else {
        $condition = false;
        echo '<script>alert("Password is incorrect !!")</script>';
        echo "<script> location.href='http://localhost/ovs-1/admin/login.php';</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include '../css/voters-voting.css';
        ?>
    </style>
    <title>Voting</title>
</head>

<body>
    <div class="voter-wel">
        <div class="welcome">
            <p>Welcome</p>
        </div>
        <div class="ongoing">
            <div class="on-head">
                <p>Ongoing Election</p>
            </div>
            <div class="on-body-div">

                <?php
                // $v = $result1->fetch_array();  // LOOP TILL END OF DATA 
                while ($can = $candidate->fetch_array()) {

                ?>
                    <div class="on-body">
                        <div class="on-body-btn">
                            <div>
                                <a href="insert.php?can_id=<?php echo $can['id_candidate']; ?>&v_id=<?php echo $vo_id; ?>&p_id=<?php echo $can['pos_id']; ?>">VOTE</a>
                            </div>
                        </div>
                        <div class="on-body-txt">
                            <p><span>Name: </span><?php echo $can['f_name'] . " " . $can['l_name'] ?> </p>
                            <p><span>Position:</span><?php echo $can['pos_name'] ?> </p>
                        </div>
                    </div>
                <?php
                }
                ?>


            </div>
        </div>
    </div>

</body>

</html>