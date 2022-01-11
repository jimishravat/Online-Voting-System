<?php
include 'conn.php';

$query = "SELECT * FROM positions";

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
    <link rel="stylesheet" href="../css/admin-positions.css">
    <link rel="stylesheet" href="../css/table_style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Agroups">

<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
</script>
    </script>
</head>


<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Online voting System</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
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
    </div>
    <div id="layoutSidenav_content">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                </div>
            </div>
        </footer>
    </div>
    <section class="ftco-section pd0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Position</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>Position ID</th>
                                    <th>Position Name</th>
                                    <th>Description</th>
                                    <th>Maximum Votes</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php   // LOOP TILL END OF DATA 
                                while ($rows = $result->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $rows['id'] ?></td>
                                        <td><?php echo $rows['position_name']  ?></td>
                                        <td><?php echo $rows['description'] ?></td>
                                        <td><?php echo $rows['max_vote']  ?></td>
                                        
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="../js/admin.js"></script>
</body>

</html>