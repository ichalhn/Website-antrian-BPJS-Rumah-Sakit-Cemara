<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/jpg" sizes="20x20" href="<?php echo base_url();?>/assets/images/logo.jpg">
    <title>Rumah Sakit Cemara</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/lite/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url();?>/lite/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url();?>index.php/home">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url();?>/assets/images/logo.jpg" style="width: 30%"/>      
                        </b>
                     </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search p-l-20">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <span class="hidden-xs">Rumah Sakit Cemara</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               

               
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div>
                  <a href="<?php echo site_url().'/surat/logout';?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>  
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="<?php echo base_url();?>index.php/home" class="waves-effect"><i class="fa fa-home" ></i>Dashboard</a>
                        </li>
                        <!--<li>
                            <a href="pages-profile.html" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Profile</a>
                        </li>-->
					
					<?php if($this->session->userdata('jabatan')=="Petugas RS"):?>
						 <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit" ></i>Data <!--<span class="fa fa-chevron-down"></span>--></a>
                            <ul class="dropdown">
                              
                              <li><a href="<?php echo base_url();?>index.php/dokter/lihatdokter">Dokter Klinik</a></li>
                              <li><a href="<?php echo base_url();?>index.php/petugas/lihatpetugas">Petugas Klinik</a></li>
							  <li><a href="<?php echo base_url();?>index.php/petugasrs/lihatpetugasrs">Petugas RS</a></li>
							  <li><a href="<?php echo base_url();?>index.php/pasien/lihatpasien">Pasien</a></li>
							  
							 
							  
                            </ul>
							
							</li>
							
							 
							 <?php elseif($this->session->userdata('jabatan')=="Petugas Klinik"):?>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table m-r-20" ></i>Form <!--<span class="fa fa-chevron-down"></span>--></a>
                            <ul class="dropdown">
                              
                              <li><a href="<?php echo base_url();?>index.php/surat/formsurat">Input Form</a></li>
							  
                              <li><a href="<?php echo base_url();?>index.php/surat/lihatsurat">Proses Form</a></li>
							  
							 
							  
                            </ul>
                        </li>
                              <?php elseif($this->session->userdata('jabatan')=="Dokter"):?>
                              <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-table m-r-20" ></i>Form <!--<span class="fa fa-chevron-down"></span>--></a>
                            <ul class="dropdown">
							  <li><a href="<?php echo base_url();?>index.php/surat/lihatsurat">Validasi</a></li>
                            </ul>
                        </li>
                             
							 <?php elseif($this->session->userdata('jabatan')=="Pasien"):?>
							 <li><a href="<?php echo base_url();?>index.php/media/view_page">Antrian</a></li>
							  
                         <?php endif;?>  
                        
                     
                        
                              
                     
     </ul>
    </section>
                        
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <?php echo $contents;?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div> <footer class="footer text-center">
                © 2018 Rumah Sakit Cemara
            </footer>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>/lite/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>/lite/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>/lite/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url();?>/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>/lite/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url();?>/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>