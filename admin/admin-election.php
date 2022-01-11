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
    <link rel="stylesheet" href="../css/admin-election.css">

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

    <div class="elec-div">
        <div class="elec-add">
            <label for="add">Create Election</label>

            <!-- On click of create button  -->
           <div>
               <label for="elec-name">Election Name:</label>
               <input type="text" name="elec-name" id="elec-name">
               <label for="elec-date">Election Date:</label>
               <input type="date" name="elec-date" id="elec-date">
               <label for="elec-res-date">Election Result Declaration:</label>
               <input type="date" name="elec-res-date" id="elec-res-date">
               <label for="elec-dept">For Department:</label>
               <input type="text" name="elec-dept" id="elec-dept">
               <label for="elec-positions">Position:</label>
               <input type="text" name="elec-positions" id="ele-positions">
               <label for="elec-dept-batch">Voters Batch:</label>
               <input type="text" name="elec-dept-batch" id="elec-dept-batch">
               
               <button>Create</button>  
           </div>


        </div>
        <div class="elec-show">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Election ID</th>
                    <th>Election Name</th>
                    <th>Department</th>
                    <th>Batch</th>
                    <th>Position</th>
                    <th>Declaration</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>14595</td>
                    <td>19 CP CR</td>
                    <td>Computer</td>
                    <td>2019</td>
                    <td>Class Representative</td>
                    <td><button>Declare</button></td>
                    <td><button>Delete</button></td>
                </tr>
            </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="../js/admin.js"></script>
</body>

</html>