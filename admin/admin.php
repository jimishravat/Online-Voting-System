<?php
    $condition = false;
	if(isset($_POST["email"], $_POST["password"])) {
	include 'conn.php';        
        $email = $_POST["email"]; 
        $password = $_POST["password"]; 

        $result1 = mysqli_query($con,"SELECT username, password FROM admin WHERE username = '$email' AND password = '$password'");
		$rows = mysqli_num_rows($result1);
        $condition =false;
        if($rows > 0)
        { 
			$condition = true;
        }
        else
        {       
			$condition = false;
            echo '<script>alert("Password is incorrect !!")</script>';
            echo "<script> location.href='http://localhost/ovs-1/admin/admin_login.php';</script>";
        }
}
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
    <style>
        <?php include "../css/admin.css" ?>
    </style>
    <style>
        <?php include "../css/style.css" ?>
    </style>

    <link rel="stylesheet" href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Agroups">

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
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

    <div class="dash-div">
        <div class="dash-box">
            <div class="box-1">
                <p>Total Positions</p>
                <?php
                    include 'conn.php';    
                    $query = 'select * from positions order by id asc';
                    $result = mysqli_query($con,$query);
                    $rows = mysqli_num_rows($result);
                    echo '<p>'.$rows.'</p>';
                ?>
            </div>
            <div class="box-2">
                <p>Total Candidates</p>
                <?php
                    include 'conn.php';    
                    $query = 'select * from candidates order by id asc';
                    $result = mysqli_query($con,$query);
                    $rows = mysqli_num_rows($result);
                    echo '<p>'.$rows.'</p>';
                ?>
            </div>
            <div class="box-3">
                <p>Total Voters</p>
                <?php
                    include 'conn.php';    
                    $query = 'select * from voters order by id asc';
                    $result = mysqli_query($con,$query);
                    $rows = mysqli_num_rows($result);
                    echo '<p>'.$rows.'</p>';
                ?>
            </div>
            <div class="box-4">
                <p>Total Votes</p>
                <?php
                    include 'conn.php';    
                    $query = 'select * from votes order by id asc';
                    $result = mysqli_query($con,$query);
                    $rows = mysqli_num_rows($result);
                    echo '<p>'.$rows.'</p>';
                ?>
            </div>
        </div>
        <div class="declare_result">
            <input type="button" value="Declare Result" name="declare" class="btn ">
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="../js/admin.js"></script>
</body>

</html>