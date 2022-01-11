<?php

include 'conn.php';
$sql = mysqli_query($con, "SELECT COUNT(candidate_id) as MAXIMUM_VOTES,candidate_id as CAND_ID,concat(candidates.firstname,' ',candidates.lastname) as FULLNAME, positions.position_name as POSITION,positions.id as POS_ID FROM((positions INNER JOIN candidates on candidates.position_id=positions.id) INNER JOIN votes on candidates.id=votes.candidate_id) GROUP by votes.candidate_id ORDER BY COUNT(votes.candidate_id) DESC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Sheets -->
    <style>
        <?php include "../css/results.css" ?>
    </style>
    <style>
        <?php include "../css/head-nav-footer.css" ?>
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Materilize Google Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Results</title>
</head>

<body>
    <!-- Heading -->
    <div class="head">
        <div>
            <img src="../images/emb.png" alt="Emblem" class="emblem">

        </div>
        <div>

            <h1 id="heading">Online Voting System</h1>
        </div>
        <div>
            <img src="../images/emb.png" alt="Emblem" class="emblem">

        </div>
    </div>

    <!-- navigation bar -->
    <div class="nav-bar">
        <div class="nav-items">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="candidate.php">Candidate</a></li>
                <li><a href="results.php">Results</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <!-- Result section -->
    <div class="result-section">
        <p>---- Results ----</p>

        <?php
        // $v = $result1->fetch_array();  // LOOP TILL END OF DATA 
        // $can1 = $sql->fetch_array();
        // $res = $can1['POS_ID'];
        // $flag = true;
        $can = $sql->fetch_array();
            // if ($flag)
        ?>
            <div class="result-box">
                <div class="result-img">
                    <img src="../images/result-1.jpeg" alt="">
                </div>
                <div class="result-declaration">
                    <p><?php echo $can['FULLNAME'] ?> </p>
                    <p>"Enthustiatic Leader"</p>
                    <p>
                        <span>Department: </span>
                        <span>Computer</span>
                    </p>
                    <p>
                        <span>Position: </span>
                        <span><?php echo $can['POSITION'] ?></span>
                    </p>
                    <p>
                        <span>Maximum Votes: </span>
                        <span><?php echo $can['MAXIMUM_VOTES'] ?></span>
                    </p>
                    <p>
                        <span>Result Date:</span>
                        <span>5th March,2021</span>
                    </p>
                </div>
            </div>
        <?php
            // $flag = false;
        
        ?>
        <!-- <div class="result-box">
            <div class="result-img">
                <img src="../images/result-2.jpeg" alt="">
            </div>
            <div class="result-declaration">
                <p>Bhumit Bedse</p>
                <p>"Enthustiatic Leader"</p>
                <p>
                    <span>Department: </span>
                    <span>Computer</span>
                </p>
                <p>
                    <span>Position: </span>
                    <span>Class Representative</span>
                </p>
                <p>
                    <span>Election Date: </span>
                    <span>28th February,2021</span>
                </p>
                <p>
                    <span>Result Date:</span>
                    <span>5th March,2021</span>
                </p>
            </div>
        </div>
        <div class="result-box">
            <div class="result-img">
                <img src="../images/result-3.jpeg" alt="">
            </div>
            <div class="result-declaration">
                <p>Ujef Malek
                </p>
                <p>"Enthustiatic Leader"</p>
                <p>
                    <span>Department: </span>
                    <span>Computer</span>
                </p>
                <p>
                    <span>Position: </span>
                    <span>Class Representative</span>
                </p>
                <p>
                    <span>Election Date: </span>
                    <span>28th February,2021</span>
                </p>
                <p>
                    <span>Result Date:</span>
                    <span>5th March,2021</span>
                </p>
            </div>
        </div> -->
    </div>

    <!-- Footer -->
    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="icon ion-social-instagram"></i></a>
                <a href="#"><i class="icon ion-social-snapchat"></i></a>
                <a href="#"><i class="icon ion-social-twitter"></i></a>
                <a href="#"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="candidate.php">Candidate</a></li>
                <li class="list-inline-item"><a href="results.php">Results</a></li>
                <li class="list-inline-item"><a href="aboutus.php">About Us</a></li>
                <li class="list-inline-item"><a href="#">Contact Us</a></li>
            </ul>
            <p class="copyright">Bhumit Bedse, Jimish Ravat, Ujef Malek © 2021</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>