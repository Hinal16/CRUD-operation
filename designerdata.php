<?php

include 'php/conn.php';


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Table Admin</title>
        <link href="css/datatable.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="logindata.php">Admin</a>
           
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="clientdata.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Client
                            </a>
                            <a class="nav-link" href="designerdata.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Designer
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Designer profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="logindata.php">Dashboard</a></li>
                            
                        </ol>
                    
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Office address</th>
                                                <th>Past Projects</th>
                                                <th>Specialities</th>
                                                <th>Business info</th>
                                                <th>Action </th>
                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php        //select from database
                                            $sql="SELECT * FROM `d_profile`";
                                            $result= mysqli_query($conn,$sql);
                                          
                                            while($row = mysqli_fetch_assoc($result)){
                                              // $row=mysqli_fetch_assoc($result);
                                           //echo var_dump($row);
                                           echo " <tr>
                                           <th scope='row'>". $row['id'] ."</th>
                                           <th>". $row['name'] ."</th>
                                           <th>". $row['email'] ."</th>
                                           <th>". $row['phone'] ."</th>
                                           <th>". $row['office_address'] ."</th>
                                           <th>". $row['past_project'] ."</th>
                                           <th>". $row['specialities'] ."</th>
                                           <th>". $row['business_info'] ."</th>
                                           <th><a class='edit' href='http://localhost/code/d_update.php?id=". $row['id'] ."'  class='btn btn-sm btn-primary'><i class='fas fa-edit'></i></a> <a href='http://localhost/code/d_delete.php?id=". $row['id'] ."' class='delete' class='btn btn-sm btn-primary'><i class='fas fa-trash-alt'></i></a> </th>
                                           
                                          
                                          </tr>";
                                             //echo $row['id'] . "\t" . $row['name']."\t" . $row['email'] ."\t" .$row['phone']."\t" .$row['address']."\t" .$row['location']."\t" .$row['password']."\t" . $row['services'];
                                             //echo "<br>";
                                          
                                           }
                                          ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                        
                           
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
