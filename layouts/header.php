<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../calo-calc/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../calo-calc/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../calo-calc/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../calo-calc/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../calo-calc/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../calo-calc/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../calo-calc/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../calo-calc/admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="../../calo-calc/admin/tableuser.php">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper" >

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
              
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

   
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: black;">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="/../../calo-calc/calo-calc/image/Capture.PNG" alt="AdminLTE Logo" class="brand-image " style=" width:26%;height: 40%;">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
             

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="index.php" class="nav-link active">
                                
                                <p>
                                   
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Accout
                                    <i class="fas fa-angle-left right"></i>
                                 
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/../calo-calc/calo-calc/admin/tableuser.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Info user</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/../calo-calc/calo-calc/admin/quan-ly-thanh-vien.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Accout</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Table
                                    <i class="fas fa-angle-left right"></i>
                                 
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/../calo-calc/calo-calc/admin/tablefood.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Table Food</p>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="/../calo-calc/calo-calc/admin/tablefitness.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Table Fitness</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/../calo-calc/calo-calc/admin/tablerecipe.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Table Recipe</p>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="/../calo-calc/calo-calc/admin/tablemenu.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Table Menu</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                   
                        
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>