<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="dashboard.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<!-- Include DataTables -->
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<!-- Include DataTables Responsive extension -->
<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.2/js/dataTables.dateTime.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.2/css/dataTables.dateTime.min.css">
<!-- DataTables Responsive CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css">
<style>

</style>

<body>
    <div class="container-fluid p-0">

        <!-- Bootstrap row -->
        <div class="row" id="body-row">
            <div class="col-md-2 no-padding">
                <!-- Sidebar -->
                <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                    <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
                    <!-- Bootstrap List Group -->
                    <ul class="list-group">
                        <!-- Separator with title -->

                        <!-- /END Separator -->
                        <!-- Menu with submenu -->
                        <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-dashboard fa-fw mr-3"></span>
                                <span class="menu-collapsed">Dashboard</span>
                                <span class="submenu-icon ml-auto"></span>
                            </div>
                        </a>

                        <a href="profile.php" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-users fa-fw mr-3"></span>
                                <span class="menu-collapsed">User Profile</span>
                                <span class="submenu-icon ml-auto"></span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-rss-square fa-fw mr-3"></span>
                                <span class="menu-collapsed">Blog Management</span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-area-chart fa-fw mr-3"></span>
                                <span class="menu-collapsed">Feedback </span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-cogs fa-fw mr-3"></span>
                                <span class="menu-collapsed">Complaints</span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-question-circle fa-fw mr-3"></span>
                                <span class="menu-collapsed">FAQ
                                </span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-calendar fa-fw mr-3"></span>
                                <span class="menu-collapsed">All Enquiries</span>
                            </div>
                        </a>
                        <!-- Separator with title -->

                        <!-- /END Separator -->
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-bell fa-fw mr-3"></span>
                                <span class="menu-collapsed">Notification <span class="badge badge-pill badge-primary ml-2">5</span></span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-envelope-o fa-fw mr-3"></span>
                                <span class="menu-collapsed">Banner Managers
                                </span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-book fa-fw mr-3"></span>
                                <span class="menu-collapsed">Manage Admin
                                </span>
                            </div>
                        </a>
                        <a href="#" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-comment fa-fw mr-3"></span>
                                <span class="menu-collapsed">Message</span>
                            </div>
                        </a>
                        <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                                <span id="collapse-text" class="menu-collapsed">Collapse</span>
                            </div>
                        </a>

                    </ul><!-- List Group END-->
                </div><!-- sidebar-container END -->
            </div>

            <div class="col-md-10">
                <div class="row align-items-end ">

                    <div class="col-md-12 d-flex justify-content-end align-items-end bg-orange py-1">


                        <!-- Hello Admin card -->
                        <div class="no-card ml-3 dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> Hello Admin
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">


                                <form id="logout-form" action="" method="POST">
                                    <button type="submit" class="dropdown-item"><i class="fa fa-sign-out"></i>
                                        Logout</button>
                                </form>
                            </div>
                        </div>



                    </div>