<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS Sheets -->
  <style>
    <?php include "../css/index.css" ?><?php include "../css/head-nav-footer.css" ?><?php include "../css/font.css" ?>
  </style>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Materilize Google Icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- footer -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Online Voting System</title>
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
        <li><a href="#">Home</a></li>
        <li><a href="candidate.php">Candidate</a></li>
        <li><a href="results.php">Results</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </div>
  </div>

  <!-- Why to vote section -->
  <div class="why-vote-sec">
    <div>
      <img src="../images/vote.jpg" alt="why to vote" id="vote">
    </div>
    <div class="why-vote">
      <h3>
        Why Voting is important?
      </h3>
      <p id="why-vote-desc">
        1. Elections have consequences.<br>
        2. Not voting is giving up your voice.<br>
        3. It's your money.<br>
        4. Voting is an opportunity for change.<br>
        5. The community depends on you!
      </p>
    </div>
  </div>

  <!-- How to vote section -->
  <div class="how-vote-sec">
    <div class="how-vote">
      <h3>How to vote?</h3>
      <p>
        <b>Step 1: </b>Click on the <b>Vote Now </b> button.<br>
        <b>Step 2: </b> Now, Login to your account and you will be redirected to the voting page.
        (If your doesn't &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; exist then you must resgister first.)
      </p>
    </div>
    <div>

      <img src="../images/how.jpg" alt="how to vote" id="vote-how">
    </div>
  </div>

  <!-- Vote Now button -->

  <button id="vote-now"><a id='votebtn' href="login_option.php">Vote Now</a></button>

  <!-- Winner of recently held elections-->
  <div class="rec-elec-win">

    <h2 id="rec-win-head">Winners of Recently held elections</h2>
    <div class="row row-cols-1 row-cols-md-3 ">
      <div class="col rec-win">
        <div class="card h-100 rec-win-card">
          <img src="../images/result-1.jpeg" class="card-img-top rec-win-img" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mayur Sharma</h5>
            <p class="card-text">Class Representative of Mechanical Department <br />
              Batch: 2019</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Declared on: 17th August, 2019</small>
          </div>
        </div>
      </div>
      <div class="col rec-win ">
        <div class="card h-100 rec-win-card">
          <img src="../images/result-4.jpeg" class="card-img-top rec-win-img" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kritika Patel</h5>
            <p class="card-text">Ladies Representative of ELectrical Department<br>
              Batch: 2020</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Declared on: 12th March, 2021</small>
          </div>
        </div>
      </div>
      <div class="col rec-win">
        <div class="card h-100 rec-win-card">
          <img src="../images/result-2.jpeg" class="card-img-top rec-win-img" alt="...">
          <div class="card-body">
            <h5 class="card-title">Rahul Chauhan</h5>
            <p class="card-text">Sports Secretary
              <br>Batch:2018
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Declared on: 28th January,2020</small>
          </div>
        </div>
      </div>
    </div>
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
        <li class="list-inline-item"><a href="contactus.php">Contact Us</a></li>
      </ul>
      <p class="copyright">Bhumit Bedse, Jimish Ravat, Ujef Malek © 2021</p>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>