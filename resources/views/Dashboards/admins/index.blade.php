@extends('Dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Cards</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                URL Monthly earnings</div>
                                                <iframe width="230" height="192" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=2098584885&amp;format=interactive"></iframe>
                                        </div>                          
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                URL (Accepted)</div>
                                                <iframe width="213" height="192" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=18952992&amp;format=interactive"></iframe>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">KW (Accepted)
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <iframe width="182" height="192" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=956313996&amp;format=interactive"></iframe>
                                                </div>                                              
                                            </div>
                                        </div>              
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">KW Monthly Earnings
                                                </div>
                                                <iframe width="200" height="186" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=1667965540&amp;format=interactive"></iframe>
                                        </div>                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    KW Burndown Billing
                                </div>
                                <div class="card-body">
                                    <div class="responsive">
                                        <iframe width="485" height="248" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=127107330&amp;format=interactive"></iframe>
                                        </div>
                                </div>
                            </div>

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">KW Production</h6>
                                </div>
                                <div class="card-body">
                                <iframe width="452" height="271" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=167806606&amp;format=interactive"></iframe>                                                
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Roster</h6>                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <iframe width="452" height="248" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=1072876136&amp;format=interactive"></iframe> 
                                </div>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a  class="d-block card-header py-3" >
                                    <h6 class="m-0 font-weight-bold text-primary">URL Production</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                    <iframe width="485" height="271" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=540064721&amp;format=interactive"></iframe>
                                    </div>
                                </div>
                            </div>

                        </div>

                        

                    </div>

                    <!--- 2nd Four Cards --->


                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    URL Burndown Billing
                                </div>
                                <div class="card-body">
                                <!--- iFrame 3 here --->
                                <iframe width="485" height="271" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=374750055&amp;format=interactive"></iframe>
                                </div>
                            </div>

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Blank Card</h6>
                                </div>
                                <div class="card-body">
                                <!--- iFrame 2 here --->                                                
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Payment Type</h6>                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <iframe width="510" height="271" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSICbk1MroLxkW_gnbc-ptwb7quEi4NvBuMzdIGps__aUpA_N7mVFzx3EklDuvDZiuVf8qF4u6sus3p/pubchart?oid=2108323072&amp;format=interactive"></iframe>
                                </div>
                            </div>

                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a  class="d-block card-header py-3" >
                                    <h6 class="m-0 font-weight-bold text-primary">Blank Card</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                    <!--iframe 4 here -->
                                    </div>
                                </div>
                            </div>

                        </div>

                        

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer here-->
            
            <!-- End of Footer -->

        </div>

        <!--Script -->

        <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    </body>

</html>


@endsection
