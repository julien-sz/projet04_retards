<!doctype html>
<html lang="fr">

<head>
    <script  type = "text / javascript"  src = "https://cdn.jsdelivr.net/jquery/latest/jquery.min.js" ></script>
    <script  type = "text / javascript" src = "https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script  type = "text / javascript"  src = "https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link  rel = "stylesheet"  type = "text / css"  href = "https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendor/inputmask/css/inputmask.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registre</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<header>
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="_index_out.html">CCi Vosges</a>
                <span class="navbar-toggler-icon"></span>
            </nav>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <li class="nav-item">
                    <div id="custom-search" class="top-search-bar">
                        <input class="form-control" type="text" placeholder="Search..">
                    </div>
                </li>
                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                <div class="notification-title"> Notification</div>
                <div class="notification-list">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                    </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                </a>
            </div>
        </div>
        </li>

        </nav>
        </li>
        <li class="nav-item dropdown connection">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                <li class="connection-list">
                    <div class="row">
                </li>
                <li>
                    <div class="conntection-footer"><a href="#">More</a></div>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown nav-user">
            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <div class="nav-user-info">
                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                    <span class="status"></span><span class="ml-2">Available</span>
                </div>
                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
            </div>
        </li>
    </div>
    </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item ">
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <div id="submenu-1-2" class="collapse submenu" style="">
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                    </li>
                                    <li class="nav-item">
                                    </li>
                                    <li class="nav-item">
                                        <div id="submenu-1-1" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">

                            <div id="submenu-2" class="collapse submenu" style="">
                            </div>
                        </li>
                        <li class="nav-item">
                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <div id="submenu-4" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div id="submenu-6" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                </ul>
                            </div>
                        </li>
                        <li class="nav-divider">
                            Developpeur Web 2020
                        </li>
                        <li class="nav-item">
                            <div id="submenu-7" class="collapse submenu" style="">
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Menu</a>
                            <div id="submenu-8" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <!-- <li class="nav-item">
                                        <a href="index.php?page=accueil">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?page=inscription">inscription</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="index.php?page=connexion">Connexion</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?page=saisie">Saisie</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.php?page=consultation">Consultation</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                         <a href="index.php?page=administration">Administration</a>
                                     </li>-->
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div id="submenu-9" class="collapse submenu" style="">
                            </div>
                        </li>
                        <li class="nav-item">
                            <div id="submenu-10" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <div id="submenu-11" class="collapse submenu" style="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

</header>

