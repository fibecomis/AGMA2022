<?php
 include_once 'webconfig.php';
 include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<?php
		include_once 'header.php';
	?>
    </head>
    
    <body data-layout="horizontal">
    
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Navigation Bar-->
            <header id="topnav">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
 
                        </ul>
    
                        <!-- LOGO -->
                        <div class="logo-box">
			
							<?php include_once 'header_logo.php'; ?>

                        </div>
    
                        
                    </div>
                </div>
                <!-- end Topbar -->

                <div class="topbar-menu">
                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <?php
									include_once 'sidemenu.php';
								?>

                            </ul>
                            <!-- End navigation menu -->
                        </div>
                        <!-- end #navigation -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end navbar-custom -->
            </header>
            <!-- End Navigation Bar-->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
		
                    <div class="container-fluid">
						 <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3"></h4>
                                    <div class="fade-slider slider " dir="ltr">
                                         <div>
                                            <img style="width:100%;margin-left: auto;margin-right: auto;margin-top:auto;margin-bottom:auto;" src="/assets/images/slider/slider1.jpg" alt="slider-img" class="img-fluid">
                                        </div>
                                        <div>
                                            <img style="width:100%;margin-left: auto;margin-right: auto;margin-top:auto;margin-bottom:auto;" src="/assets/images/slider/slider2.jpg" alt="slider-img" class="img-fluid">
                                        </div>
                                        <div>
                                            <img style="width:100%;margin-left: auto;margin-right: auto;margin-top:auto;margin-bottom:auto;" src="/assets/images/slider/1.jpg" alt="slider-img" class="img-fluid">
                                             <div class="carousel-caption">
                                                <h2 style="color: white;">First Bukidnon Electric Cooperative, Incorporated</h2>
                                                <p style="color: white;">FIBECO, Inc. is   primarily  engaged in the distribution of  electricity throughout  its franchise area that include Valencia City, the municipalities   of   San Fernando,   Maramag,  Don  Carlos, Kitaotao, Dangcagan,  Quezon,  Kibawe,  Damulog,  Kadingilan, Pangantucan,  and Kalilangan, in  the Province  of Bukidnon, and the municipality of Wao in Lanao del Sur.</p>
                                            </div>
                                        </div>
                                        <div>
                                            <img style="width:100%;margin-left: auto;margin-right: auto;margin-top:auto;margin-bottom:auto;" src="/assets/images/slider/2.jpg" alt="slider-img" class="img-fluid">
                                             <div class="carousel-caption">
                                                <h1 style="color: white; text-shadow: 2px 2px 8px #000000;">50 years </h1>
                                                <h3 style="color: white; text-shadow: 2px 2px 8px #000000;">In genuine service to the Member-Consumer-Owners</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->
                        </div>
						
						<div class="row">
                            <div class="col-lg-8"> <!--LEFT-->
							
							<?php
								$id = "";
								if(isset($_GET['id']))
								{
									$id = $_GET['id'];
								}			

								if($id == "1")
								{
									include_once 'advisories.php';
								}
								else
								{

                                include_once 'rowdata.php';

                                include_once 'blog_posts.php';

                                include_once 'public_advisory.php';

                                include_once 'power_advisory.php';
                                
                                 include_once 'featured_video.php';

								}
								?>
							
							</div>
							
							<div class="col-lg-4"> <!--RIGHT-->
							
							<?php 
								include_once 'countdown.php';

                                include_once 'announcements.php';

                                include_once 'erates.php';

                                // include_once 'servicedrop.php';

                                include_once 'pmes.php';

                                include_once 'taknasafibeco.php';

                                include_once 'tawag_center.php';
								
							?>
	
							</div>
						</div>
						
						
                    </div>
                

                <!-- Footer Start -->
				<?php
					include_once 'footer_data.php';
				?>
                
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

		<?php
			include_once 'footer.php';
		?>
        
    </body>
</html>