<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Sheets -->
    <style>
  <?php include "../css/candidate.css"?>
</style>
  <style>
  <?php include "../css/head-nav-footer.css" ?>
</style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Materilize Google Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Candidates</title>
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
                <li><a href="#">Candidate</a></li>
                <li><a href="results.php">Results</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php" >Contact Us</a></li>
            </ul>
        </div>
    </div>

    <!-- How candidate can apply -->
    <div class="apply-how-section">
        <p>---- How can you apply for the candidate? -----</p>
        <div class="how-apply-img">
            <img src="../images/how-apply.jpg" alt="">
        </div>
        <div class="how-apply-desc">
        <p><span>Step 1:</span> First of all check whether your desired election is upcoming or not.</p>
            <p><span>Step 2:</span> If it is upcoming, then click on the button given on the side.</p>
            <p><span>Step 3:</span> Then a form will pop-up, fill that form and your response will be recorded.</p>
            <p><span>Step 4:</span> If you are eligible for that particular election then you will receive the confirmation mail.</p>
        </div>
    </div>

    <!-- Ongoing elections -->
    <div class="ongoing-election">
        <p>Upcoming election</p>
        <table>
            <tr class="row-ongoing">
                <td class="col-ongoing-title" name="ongoing-title">Computer Department : CR</td>
                <td class="col-ongoing-button">
                    <button type="button" class="btn-form">Apply</button>
                </td>
            </tr>
            <tr class="row-ongoing">
                <td class="col-ongoing-title" name="ongoing-title">Mechanical Department : CR</td>
                <td class="col-ongoing-button">
                    <button type="button" class="btn-form">Apply</button>
                </td>
            </tr>
            <tr class="row-ongoing">
                <td class="col-ongoing-title" name="ongoing-title">Civil Department : CR</td>
                <td class="col-ongoing-button">
                    <button type="button" class="btn-form">Apply</button>
                </td>
            </tr>
        </table>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

</body>

</html>