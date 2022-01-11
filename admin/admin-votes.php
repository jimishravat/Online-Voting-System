<?php
include 'conn.php';

$query = "SELECT votes.voters_id as voterid,voters.firstname as fname,voters.lastname as lname,votes.candidate_id as cid,candidates.firstname as cfname,candidates.lastname as clname,votes.position_id as pid,positions.position_name as pname FROM (votes INNER JOIN voters on votes.voters_id = voters.id) INNER JOIN candidates on votes.candidate_id = candidates.id INNER JOIN positions on votes.position_id = positions.id";

$result = mysqli_query($con, $query);
// $con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin-votes.css">
    <link rel="stylesheet" href="../css/table_style.css">

    <link rel="stylesheet" href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Agroups">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>


<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Online voting System</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="admin.php">
                            <div class="sb-nav-link-icon"></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="admin-votes.php">
                            <div class="sb-nav-link-icon"></div>
                            Votes
                        </a>
                    </div>

                    <div class="sb-sidenav-menu-heading">Manage</div>
                    <a class="nav-link" href="admin-voters.php">
                        <div class="sb-nav-link-icon"></div>
                        Voters
                    </a>
                    <a class="nav-link" href="admin-positions.php">
                        <div class="sb-nav-link-icon"></div>
                        Position
                    </a>
                    <a class="nav-link" href="admin-candidates.php">
                        <div class="sb-nav-link-icon"></div>
                        Candidates
                    </a>
                </div>
        </div>
        </nav>
    <!-- <div class="tableheader"> -->
    <section class="ftco-section pd0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Total Votes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>Voter ID</th>
                                    <th>Voter Name</th>
                                    <th>Candidate ID</th>
                                    <th>Candidate Name</th>
                                    <th>Position ID</th>
                                    <th>Position Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php   // LOOP TILL END OF DATA 
                                while ($rows = $result->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $rows['voterid'] ?></td>
                                        <td><?php echo $rows['fname'] . " " . $rows['lname'] ?></td>
                                        <td><?php echo $rows['cid'] ?></td>
                                        <td><?php echo $rows['cfname'] . " " . $rows['clname'] ?></td>
                                        <td><?php echo $rows['pid'] ?></td>
                                        <td><?php echo $rows['pname'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- </div> -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="../js/admin.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</body>

</html>