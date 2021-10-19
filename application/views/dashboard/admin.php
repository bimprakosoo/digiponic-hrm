<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Favicon -->
	<!-- <link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon"> -->
	
	<!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/admin/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>
	
	<!-- Data table CSS -->
	<link href="<?php echo base_url();?>assets/admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<link href="<?php echo base_url();?>assets/admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="<?php echo base_url();?>assets/admin/dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    

	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper">
			<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
				<a href="<?php echo base_url();?>LandingPage"><img class="brand-img pull-left" src="<?php echo base_url();?>assets/image/logo.svg" alt="brand"/></a>
				<ul class="nav navbar-right top-nav pull-right">
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#site_navbar_search">
						<i class="fa fa-search top-nav-icon"></i>
						</a>
					</li>
					
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
						<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<div class="streamline message-box message-nicescroll-bar">
									<div class="sl-item">
										<div class="sl-avatar avatar avatar-sm avatar-circle">
											<img class="img-responsive img-circle" src="<?php echo base_url();?>assets/admin/dist/img/logo.png" alt="avatar"/>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">Sandy Doe</a>
											<span class="inline-block font-12  pull-right">12/10/16</span>
											<div class="clearfix"></div>
											<p>Neque porro quisquam est!</p>
										</div>
									</div>
									<hr/>
									<div class="sl-item">
										<div class="icon">
											<i class="fa fa-spotify"></i>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">
											2 voice mails</a>
											<span class="inline-block font-12  pull-right">2pm</span>
											<div class="clearfix"></div>
											<p>Neque porro quisquam est</p>
										</div>
									</div>
									<hr/>
									<div class="sl-item">
										<div class="icon">
											<i class="fa fa-whatsapp"></i>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">8 voice messanger</a>
											<span class="inline-block font-12 pull-right">1pm</span>
											<div class="clearfix"></div>
											<p>8 texts</p>
										</div>
									</div>
									<hr/>
									<div class="sl-item">
										<div class="icon">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">2 new messages</a>
											<span class="inline-block font-12  pull-right">1pm</span>
											<div class="clearfix"></div>
											<p>ashjs@gmail.com</p>
										</div>
									</div>
									<hr/>
									<div class="sl-item">
										<div class="sl-avatar avatar avatar-sm avatar-circle">
											<img class="img-responsive img-circle" src="dist/img/user4.png" alt="avatar"/>
										</div>
										<div class="sl-content">
											<a href="javascript:void(0)" class="inline-block capitalize-font  pull-left">Sandy Doe</a>
											<span class="inline-block font-12  pull-right">1pm</span>
											<div class="clearfix"></div>
											<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="<?php echo base_url();?>assets/admin/dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-credit-card-alt"></i> my balance</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="collapse navbar-search-overlap" id="site_navbar_search">
					<form role="search">
						<div class="form-group mb-0">
							<div class="input-search">
								<div class="input-group">	
									<input type="text" id="overlay_search" name="overlay-search" class="form-control pl-30" placeholder="Search">
									<span class="input-group-addon pr-30">
									<a  href="javascript:void(0)" class="close-input-overlay" data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
									</span> 
								</div>
							</div>
						</div>
					</form>
				</div>
			</nav>
			<!-- /Top Menu Items -->
			
			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li>
						<a class="active" href="widgets.html"><i class="glyphicon glyphicon-th-large mr-10"></i>Dashboard</a>
					</li>
					<li>
						<a  href="javascript:void(0);" data-toggle="collapse" data-target="#pekerjaan"><i class="glyphicon glyphicon-tasks mr-10"></i>Pekerjaan <span class="pull-right"><span class="label label-success mr-10">4</span><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="pekerjaan" class="collapse collapse-level-1">
							<!-- <li>
								<a class="active" href="index.html">Analytical</a>
							</li>
							<li>
								<a href="index2.html">Demographic</a>
							</li>
							<li>
								<a href="index3.html">Project</a>
							</li> -->
							<li>
								<a href="index.html">Lamaran Masuk</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#organisasi"><i class="glyphicon glyphicon-tasks mr-10"></i>Organisasi<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="organisasi" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Dashboard</a>
							</li>
							<li>
								<a href="product.html">Products</a>
							</li>
							<li>
								<a href="product-detail.html">Product Detail</a>
							</li>
							<li>
								<a href="add-products.html">Add Product</a>
							</li>
							<li>
								<a href="product-orders.html">Orders</a>
							</li>
							<li>
								<a href="product-cart.html">Cart</a>
							</li>
							<li>
								<a href="product-checkout.html">Checkout</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#kehadiran"><i class="glyphicon glyphicon-tasks mr-10"></i>Kehadiran<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="kehadiran" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Dashboard</a>
							</li>
							<li>
								<a href="product.html">Products</a>
							</li>
							<li>
								<a href="product-detail.html">Product Detail</a>
							</li>
							<li>
								<a href="add-products.html">Add Product</a>
							</li>
							<li>
								<a href="product-orders.html">Orders</a>
							</li>
							<li>
								<a href="product-cart.html">Cart</a>
							</li>
							<li>
								<a href="product-checkout.html">Checkout</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#cuti"><i class="glyphicon glyphicon-tasks mr-10"></i>Cuti<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="cuti" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Dashboard</a>
							</li>
							<li>
								<a href="product.html">Products</a>
							</li>
							<li>
								<a href="product-detail.html">Product Detail</a>
							</li>
							<li>
								<a href="add-products.html">Add Product</a>
							</li>
							<li>
								<a href="product-orders.html">Orders</a>
							</li>
							<li>
								<a href="product-cart.html">Cart</a>
							</li>
							<li>
								<a href="product-checkout.html">Checkout</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="widgets.html"><i class="glyphicon glyphicon-tasks mr-10"></i>Mutasi</a>
					</li>
					<li>
						<a href="widgets.html"><i class="glyphicon glyphicon-tasks mr-10"></i>Karyawan</a>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#P_kinerja"><i class="glyphicon glyphicon-tasks mr-10"></i>Penilaian Kinerja<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="P_kinerja" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Dashboard</a>
							</li>
							<li>
								<a href="product.html">Products</a>
							</li>
							<li>
								<a href="product-detail.html">Product Detail</a>
							</li>
							<li>
								<a href="add-products.html">Add Product</a>
							</li>
							<li>
								<a href="product-orders.html">Orders</a>
							</li>
							<li>
								<a href="product-cart.html">Cart</a>
							</li>
							<li>
								<a href="product-checkout.html">Checkout</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#T_pekerja"><i class="glyphicon glyphicon-tasks mr-10"></i>Top Pekerja<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="T_pekerja" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Dashboard</a>
							</li>
							<li>
								<a href="product.html">Products</a>
							</li>
							<li>
								<a href="product-detail.html">Product Detail</a>
							</li>
							<li>
								<a href="add-products.html">Add Product</a>
							</li>
							<li>
								<a href="product-orders.html">Orders</a>
							</li>
							<li>
								<a href="product-cart.html">Cart</a>
							</li>
							<li>
								<a href="product-checkout.html">Checkout</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#Acara"><i class="glyphicon glyphicon-tasks mr-10"></i>Acara dan Rapat<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="Acara" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Dashboard</a>
							</li>
							<li>
								<a href="product.html">Products</a>
							</li>
							<li>
								<a href="product-detail.html">Product Detail</a>
							</li>
							<li>
								<a href="add-products.html">Add Product</a>
							</li>
							<li>
								<a href="product-orders.html">Orders</a>
							</li>
							<li>
								<a href="product-cart.html">Cart</a>
							</li>
							<li>
								<a href="product-checkout.html">Checkout</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="widgets.html"><i class="glyphicon glyphicon-tasks mr-10"></i>Artikel</a>
					</li>
					<li>
						<a href="widgets.html"><i class="glyphicon glyphicon-tasks mr-10"></i>Hak Istimewa</a>
					</li>
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->
			
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg  bg-red">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-light">analytical</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>dashboard</span></a></li>
							<li class="active"><span>analytical</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				
					<div class="row">
					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"></i>8 task completed out of 10</h6>
								</div>
								<div class="pull-right">
									<div class="dropdown">
										<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><h6 class="panel-title txt-dark">Show : <span style="color: #2384FF"> this week</span> </h6><span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
										<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
											<li>
												<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-fw fa-credit-card-alt"></i> my balance</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>

							<div class="panel-wrapper collapse in">
                                <div class="panel-body">
							<h5> <strong>23 December, Sunday</strong></h5>
							</div>
							</div>

							<div class="panel-wrapper collapse in">
                                <div class="panel-body">
									<div class="row ">
												<div class="col-sm-1 txt-dark">Sun</div>
												<div class="col-sm-1 txt-dark">Mon</div>
												<div class="col-sm-1 txt-dark">Tue</div>
												<div class="col-sm-1 txt-dark">Wed</div>
												<div class="col-sm-1 txt-dark">Thu</div>
												<div class="col-sm-1 txt-dark">Fri</div>
												<div class="col-sm-1 txt-dark">Sat</div>
									</div>
									<div class="row ">
												<div class="col-sm-1">23</div>
												<div class="col-sm-1">24</div>
												<div class="col-sm-1">25</div>
												<div class="col-sm-1">26</div>
												<div class="col-sm-1">27</div>
												<div class="col-sm-1">28</div>
												<div class="col-sm-1">29</div>
									</div>
								</div>
							</div>
							
							<hr>
							<div class="card-view" style="box-shadow: 
								0px 2px 10px rgba(0, 0, 0, 0.08);
								border-radius: 4px;"> 
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
									<h5 class="panel-title-2 pull-left"> 23 December, Sunday</h5>
									<p class="text-muted pull-right"> Reminder</p>
								</div>
								<div class="panel-body">
									<p class="text-muted pull-left"> Due date: <span class="txt-dark">December 23, 2018</span></p>
								</div>
								<div class="panel-body">
									<img src="<?php echo base_url();?>assets/image/karyawan/fotoKaryawan.svg" alt="" class="pull-left" width="30px" height="100%" style="border-radius: 50%;">
									<p class="pull-left txt-dark" style="margin-left: 10px;">Aprilda Peter</p>
									<button class="btn btn-success pull-right txt-white" style="border-radius: 4px;">Completed</button>
								</div>
							</div>
						</div>
                    </div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Conversion Rate</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_1"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">23</span><span>%</span>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Total Visits</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="sm-graph-box">
											<div class="row">
												<div class="col-xs-6">
													<div id="sparkline_2"></div>
												</div>
												<div class="col-xs-6">
													<div class="counter-wrap text-right">
														<span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">12</span><span>m</span>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">downloads</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="sm-graph-box">
											<div class="row">
												<div class="col-xs-6">
													<div id="sparkline_6"></div>
												</div>
												<div class="col-xs-6">
													<div class="counter-wrap text-right">
														<span class="counter-cap"><i class="fa  fa-level-down txt-danger"></i></span><span class="counter">1122</span>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
					</div>
					
				</div>
				<!-- /Row -->
				
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-primary card-view">
							<div class="panel-heading mb-20">
								<div class="pull-left">
									<h6 class="panel-title txt-light">top countries</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table  class="table  top-countries" >
												<tbody>
													<tr>
														<td>
															<img src="dist/img/country/gb.svg" alt="user_img">	
														</td>
														<td>
															United Kingdom
														</td>
														<td>
															$50
														</td>
													</tr>
													<tr>
														<td>
															<img src="dist/img/country/my.svg" alt="user_img">	
														</td>
														<td>
															Malaysia
														</td>
														<td>
															$20
														</td>
													</tr>
													<tr>
														<td>
															<img src="dist/img/country/au.svg" alt="user_img">
														</td>
														<td>
															Australia
														</td>
														<td>
															$5
														</td>
													</tr>
													
													<tr>
														<td>
															<img src="dist/img/country/us.svg" alt="user_img">
														</td>
														<td>
															United States
														</td>
														<td>
															$5
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-pie-chart mr-10"></i>Impressions</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_6" height="280"></canvas>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-lg-6 col-md-12">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-clock mr-10"></i>Average Position</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="morris_extra_line_chart" class="morris-chart" style="height:280px;"></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-green">
										<div class="row ma-0">
											<div class="col-xs-5 text-center pa-0 icon-wrap-left">
												<i class="icon-diamond txt-light"></i>
											</div>
											<div class="col-xs-7 text-center data-wrap-right">
												<h6 class="txt-light">monthly sales</h6>
												<span class="txt-light counter counter-anim">45678</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="weather_3" class="panel panel-default card-view pa-0 weather-info">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="row ma-0">
										<div class="col-xs-6 pa-0">
											<div class="left-block-wrap pa-30">
												<p class="block nowday"></p>
												<span class="block nowdate"></span>
												<div class="left-block  mt-15"></div>
											</div>
										</div>
										<div class="col-xs-6 pa-0">
											<div class="right-block-wrap pa-30">
												<div class="right-block"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">statement table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview" id="statement">
												<thead>
													<tr>
														<th>date</th>
														<th>Order ID</th>
														<th>type</th>
														<th>Details</th>
														<th>price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>10-7-2016</td>
														<td>#85457898</td>
														<td>
															<span class="label label-primary font-weight-100">fee</span>
														</td>
														<td>
															Author Fee for included support sale IVIP13444036
														</td>
														<td>$20</td>
													</tr>
													<tr>
														<td>10-7-2016</td>
														<td>#85457897</td>
														<td>
															<span class="label label-danger font-weight-100">refund</span>
														</td>
														<td>
															Author Fee for included support sale IVIP13444036
														</td>
														<td>$20</td>
													</tr>
													<tr>
														<td>10-7-2016</td>
														<td>#85457896</td>
														<td>
															<span class="label label-primary font-weight-100">fee</span>
														</td>
														<td>
															Author Fee for included support sale IVIP13444036
														</td>
														<td>$20</td>
													</tr>
													<tr>
														<td>10-7-2016</td>
														<td>#85457895</td>
														<td>
															<span class="label label-info font-weight-100">support</span>
														</td>
														<td>
															Author Fee for included support sale IVIP13444036
														</td>
														<td>$20</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>	
								</div>	
							</div>
						</div>
					</div>
				</div>	
				<!-- Row -->
			</div>
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-5">
						<a href="index.html" class="brand mr-30"><img src="dist/img/logo-sm.png" alt="logo"/></a>
						<ul class="footer-link nav navbar-nav">
							<li class="logo-footer"><a href="#">help</a></li>
							<li class="logo-footer"><a href="#">terms</a></li>
							<li class="logo-footer"><a href="#">privacy</a></li>
						</ul>
					</div>
					<div class="col-sm-7 text-right">
						<p>2016 &copy; Kenny. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->




<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/admin/vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/dist/js/jquery.slimscroll.js"></script>
	
	<!-- simpleWeather JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/dist/js/simpleweather-data.js"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/vendors/bower_components/Counter-Up/jquery.counterup.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="<?php echo base_url();?>assets/admin/dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- ChartJS JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/vendors/chart.js/Chart.min.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/dist/js/morris-data.js"></script>
	
	<script src="<?php echo base_url();?>assets/admin/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
	
	<!-- Init JavaScript -->
	<script src="<?php echo base_url();?>assets/admin/dist/js/init.js"></script>
	<script src="<?php echo base_url();?>assets/admin/dist/js/dashboard-data.js"></script>
	
</body>
</html>