<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf_token" content="<?php echo e(csrf_token()); ?>"> <!-- CSRF Token -->
	 
    	<link rel="icon" href="<?php echo e(IMAGE_PATH_SITE_FAVCASION.getSetting('site_favicon', 'site_settings')); ?>" type="image/x-icon" />
		<!-- Title -->
		<title><?php if(isset($title)) echo $title;else echo 'Ecomm'; ?></title>
		<link rel="stylesheet" href="<?php echo e(ASSETS); ?>asset/fonts/fonts/font-awesome.min.css" type="text/css">
    
<link href="<?php echo e(CSS); ?>ajax-datatables.css" rel="stylesheet">
		
		<!-- Sidemenu Css -->
		<link href="<?php echo e(ASSETS); ?>asset/plugins/fullside-menu/css/style.css" rel="stylesheet">
		<link href="<?php echo e(ASSETS); ?>asset/plugins/fullside-menu/waves.min.css" rel="stylesheet">

    <!-- Dashboard Css -->
    
    <link href="<?php echo e(ASSETS); ?>asset/css/dashboard.css" rel="stylesheet">
 
    <link href="<?php echo e(ASSETS); ?>asset\plugins\select2\select2.min.css" rel="stylesheet">

		<!-- Morris.js Charts Plugin -->
		<link href="<?php echo e(ASSETS); ?>/asset/plugins/morris/morris.css" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="<?php echo e(ASSETS); ?>asset/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">
	<?php echo $__env->yieldContent('header_scripts'); ?>
		<!---Font icons-->
		<link href="<?php echo e(CSS); ?>sweetalert.css" rel="stylesheet" type="text/css">
    <link href="<?php echo e(ASSETS); ?>asset/css/icons.css" rel="stylesheet">
     
	</head>
	<body  ng-app="vehicle_booking">
		<div id="global-loader"></div>
		<div class="page">
			<div class="page-main">
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="<?php echo e(URL_DASHBOARD); ?>">
                <img src="<?php echo e(ASSETS); ?>asset\images\brand\logo.png" class="header-brand-img" alt="adminor logo">
                <!-- <?php 
                $site_title = getSetting('site_title', 'site_settings');
                if( $site_title == '' )
                  $site_title = getPhrase('Digi Downloads');
                 ?>
                   <span class="logo-mini"><img src="<?php echo e(IMAGE_PATH_SITE_LOGO.getSetting('site_logo', 'site_settings')); ?>" alt="<?php echo e(getSetting('site_title','site_settings')); ?>"  ></span> -->
                </a>
              
             


							<div class="menu-toggle-button">
								<a class="nav-link wave-effect" href="#" id="sidebarCollapse">
									<span class="fa fa-bars"></span>
								</a>
							</div>
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
								<div class="p-2">
									<form class="input-icon ">
										<div class="input-icon-addon">
											<i class="fe fe-search"></i>
										</div>
										<input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
									</form>
								</div>

								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fa fa-expand" id="fullscreen-button"></i>
									</a>
								</div>

              
								<div class="dropdown d-none d-md-flex">
									<a href="<?php echo e(URL_MESSAGES); ?>" class="nav-link icon text-center"  >
										<i class="icon icon-speech"></i>
										<span class=" nav-unread badge badge-info badge-pill"><?php echo e($count = Auth::user()->newThreadsCount()); ?></span>
									</a>
								 
                </div>
                
                <?php $current_user = Auth::user();
                $login_user_image = Auth::user()->image; ?>

								<div class="dropdown text-center selector">
									<a href="#" class="nav-link leading-none" data-toggle="dropdown">
										<span class="avatar avatar-sm brround cover-image" data-image-src="<?php echo e(getProfilePath($login_user_image)); ?>"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown"> <?php echo e(ucfirst($current_user->name)); ?></a>
											<span class="text-center user-semi-title text-dark"><?php echo e(ucfirst(getRoleData($current_user->role_id))); ?></span>
                      <div class="dropdown-divider"></div>
                 
										</div>
										<a class="dropdown-item" href="<?php echo e(URL_USERS_EDIT . Auth::User()->slug); ?>">
											<i class="dropdown-icon mdi mdi-account-outline"></i> <?php echo e(getPhrase('Profile')); ?>

										</a>
										 
										<a class="dropdown-item" href="<?php echo e(URL_LOGOUT); ?>"  onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> <?php echo e(getPhrase('Sign out')); ?>

                    </a>
                    <form id="logout-form" action="<?php echo e(URL_LOGOUT); ?>" method="POST" style="display: none;">
                          <?php echo e(csrf_field()); ?>

                      </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wrapper">
					<!-- Sidebar Holder -->
					<nav id="sidebar" class="nav-sidebar">
						<ul class="list-unstyled components" id="accordion">
							<div class="user-profile">
								<div class="dropdown user-pro-body">
									<div><img src="<?php echo e(getProfilePath($login_user_image)); ?>" alt="user-img" class="img-circle"></div>
									<div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold"><?php echo e(ucfirst($current_user->name)); ?></span>  </a>
									<br><span class=" "><i class="fa fa-circle text-success"></i> <?php echo e(getPhrase('Online')); ?></span>
									</div>
								</div>
							</div>

							<li class="<?php echo e(isActive($main_active, 'dashboard')); ?>">
								<a href="<?php echo e(URL_DASHBOARD); ?>" class="accordion-toggle wave-effect"  >
									<i class="fa fa-home mr-2"></i> <?php echo e(getPhrase('home')); ?>

								</a>
								 
              </li>
              <?php if(isModuleEligible('Users')): ?>
              <li class="<?php echo e(isActive($main_active, 'users')); ?>">
								<a href="#usermenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-users mr-2"></i> <?php echo e(getPhrase('users')); ?>

								</a>
								<ul class="collapse list-unstyled" id="usermenu" data-parent="#accordion"> 
                  <?php if(isModuleEligible('Users')): ?>								 
                  <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_USERS."all"); ?>"><i class="fa fa-users"></i> <?php echo e(getPhrase('all')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Users_Owners')): ?>
                  <li class="<?php echo e(isActive($sub_active, 'ownerlist')); ?>"><a href="<?php echo e(URL_USERS."owner"); ?>"><i class="fa fa-user-times"></i> <?php echo e(getPhrase('owners')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Users_Admins')): ?>
                  <li class="<?php echo e(isActive($sub_active, 'adminlist')); ?>"><a href="<?php echo e(URL_USERS."admin"); ?>"><i class="fa fa-user-secret"></i> <?php echo e(getPhrase('admins')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Users_Executives')): ?>
                  <li class="<?php echo e(isActive($sub_active, 'executivelist')); ?>"><a href="<?php echo e(URL_USERS."executive"); ?>"><i class="fa fa-male"></i> <?php echo e(getPhrase('executives')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Users_Vendors')): ?>
                  <li class="<?php echo e(isActive($sub_active, 'vendorlist')); ?>"><a href="<?php echo e(URL_USERS."vendor"); ?>"><i class="fa fa-user-md"></i> <?php echo e(getPhrase('vendors')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Users_Customers')): ?>
                  <li class="<?php echo e(isActive($sub_active, 'userlist')); ?>"><a href="<?php echo e(URL_USERS."user"); ?>"><i class="fa fa-female"></i> <?php echo e(getPhrase('customers')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Users', array('Add'))): ?>
                  <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_USERS_ADD); ?>"><i class="fa fa-user-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Users', array( 'Import' ))): ?>
                  <li class="<?php echo e(isActive($sub_active, 'import')); ?>"><a href="<?php echo e(URL_IMPORT."user"); ?>"><i class="fa fa-user"></i> <?php echo e(getPhrase('import')); ?></a></li> 
                  <?php endif; ?>  
								</ul>
              </li>
              <?php endif; ?>
              <?php if(isModuleEligible('Categories')): ?>
							<li class="<?php echo e(isActive($main_active, 'categories')); ?>">
								<a href="#categorymenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-snowflake-o mr-2"></i> Categories
								</a>
								<ul class="collapse list-unstyled" id="categorymenu" data-parent="#accordion">
                  <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_CATEGORIES); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php if(isModuleEligible('Categories', array('Add'))): ?>
                  <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_CATEGORIES_ADD); ?>"><i class="fa fa-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Categories', array('Import'))): ?>
                  <li class="<?php echo e(isActive($sub_active, 'import')); ?>"><a href="<?php echo e(URL_IMPORT.'category'); ?>"><i class="fa fa-download"></i> <?php echo e(getPhrase('import')); ?></a></li> 
                  <?php endif; ?> 
                </ul>
              </li>
              <?php endif; ?> 
              <?php if(isModuleEligible('Coupons')): ?>
							<li class="<?php echo e(isActive($main_active, 'coupons')); ?> ">
								<a href="#couponmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fa fa-hashtag mr-2"></i> <?php echo e(getPhrase('coupons')); ?></a>
								<ul class="collapse list-unstyled" id="couponmenu" data-parent="#accordion">
                <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_COUPONS); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php if(isModuleEligible('Coupons', array('Add'))): ?>
                <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_COUPONS_ADD); ?>"><i class="fa fa-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> </ul>
              </li> 
              <?php endif; ?>
              <?php if(isModuleEligible('Licences')): ?>
							<li class="<?php echo e(isActive($main_active, 'licences')); ?>">
								<a href="#licencemenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-key mr-2"></i><?php echo e(getPhrase('licences')); ?>

								</a>
								<ul class="collapse list-unstyled" id="licencemenu" data-parent="#accordion">
                <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_LICENCES); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php if(isModuleEligible('Licences', array('Add'))): ?>
                <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_LICENCES_ADD); ?>"><i class="fa fa-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> </ul>
              </li> 
              <?php endif; ?>
              <?php if(isModuleEligible('Products')): ?>
							<li class="<?php echo e(isActive($main_active, 'products')); ?>">
								<a href="#productmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-shopping-bag mr-2"></i> Products
								</a>
								<ul class="collapse list-unstyled" id="productmenu" data-parent="#accordion">
                <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_PRODUCTS); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php if(isModuleEligible('Products', array('Add'))): ?>
                <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_PRODUCTS_ADD); ?>"><i class="fa fa-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Products', 'Import')): ?>
                <li class="<?php echo e(isActive($sub_active, 'import')); ?>"><a href="<?php echo e(URL_IMPORT . 'product'); ?>"><i class="fa fa-download"></i> <?php echo e(getPhrase('Import')); ?></a></li> <?php endif; ?> </ul>
              </li> 
              <?php endif; ?> 
              <?php if(isModuleEligible('Email_Templates')): ?>
							<li class="<?php echo e(isActive($main_active, 'templates')); ?>">
                <a href="#emailmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fa fa-commenting-o mr-2"></i> <?php echo e(getPhrase('Templates')); ?></a>
                <ul class="collapse list-unstyled" id="emailmenu" data-parent="#accordion">
                  <li class="<?php echo e(isActive($sub_active, 'list_email')); ?>"><a href="<?php echo e(URL_TEMPLATES_EMAIL); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php if(isModuleEligible('Email_Templates', array('Add'))): ?>
                  <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_TEMPLATES_ADD); ?>"><i class="fa fa-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> </ul>
              </li> 
              <?php endif; ?>
              <?php if(isModuleEligible('Offers')): ?>
							<li class="<?php echo e(isActive($main_active, 'offers')); ?>">
								<a href="#offermenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-tags mr-2"></i> <?php echo e(getPhrase('offers')); ?>

								</a>
								<ul class="collapse list-unstyled" id="offermenu" data-parent="#accordion">
                <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_OFFERS); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php if(isModuleEligible('Offers', array('Add'))): ?>
                <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_OFFERS_ADD); ?>"><i class="fa fa-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> </ul>
              </li> 
              <?php endif; ?>
              <?php if(isModuleEligible('Pages')): ?>
							<li class="<?php echo e(isActive($main_active, 'pages')); ?>">
								<a href="#pagemenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-file-text-o mr-2"></i> <?php echo e(getPhrase('pages')); ?>

								</a>
								<ul class="collapse list-unstyled" id="pagemenu" data-parent="#accordion">
                <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_PAGES); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php if(isModuleEligible('Pages', array('Add'))): ?>
                <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_PAGES_ADD); ?>"><i class="fa fa-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> </ul>
              </li> 
              <?php endif; ?> 
              <?php if(isModuleEligible('Faq')): ?>
							<li class="<?php echo e(isActive($main_active, 'faq')); ?>">
								<a href="#faqmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-question mr-2"></i> FAQs
								</a>
								<ul class="collapse list-unstyled" id="faqmenu" data-parent="#accordion">
                <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_FAQ); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php if(isModuleEligible('Faq', array('Add'))): ?>
                <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_FAQ_ADD); ?>"><i class="fa fa-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> </ul>
              </li> 
              <?php endif; ?> 
              <?php if(isModuleEligible('Payments_Report')): ?>
							<li class="<?php echo e(isActive($main_active, 'reports')); ?>">
								<a href="#paymentmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-cc-paypal mr-2"></i><?php echo e(getPhrase('payment_reports')); ?>

								</a>
								<ul class="collapse list-unstyled" id="paymentmenu" data-parent="#accordion">
                <li class="<?php echo e(isActive($sub_active, 'online_reports')); ?>"><a href="<?php echo e(URL_ONLINE_PAYMENT_REPORTS); ?>"><i class="fa fa-file"></i> <?php echo e(getPhrase('online_reports')); ?></a></li>
                <li class="<?php echo e(isActive($sub_active, 'offline_reports')); ?>">
                    <a href="<?php echo e(URL_OFFLINE_PAYMENT_REPORTS); ?>"> <i class="fa fa-files-o" aria-hidden="true"></i> <?php echo e(getPhrase('offline_reports')); ?> </a>
                </li> <?php if(isModuleEligible('Payments_Report', array('Export'))): ?>
                <li class="<?php echo e(isActive($sub_active, 'export')); ?>">
                    <a href="<?php echo e(URL_PAYMENT_REPORT_EXPORT); ?>"> <i class="fa fa-file-text-o" aria-hidden="true"></i> <?php echo e(getPhrase('export')); ?> </a>
                </li>
                <li class="<?php echo e(isActive($sub_active, 'free_bies')); ?>">
                    <a href="<?php echo e(URL_FREEBIES_REPORTS); ?>"> 

                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                <?php echo e(getPhrase('free_bies')); ?> </a>
                </li> <?php endif; ?> </ul>
              </li> 
              <?php endif; ?> 
              <?php if(isModuleEligible('Menus')): ?>
							<li class="<?php echo e(isActive($main_active, 'menu')); ?>">
								<a href="#menumenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
                  <i class="fa fa-bars mr-2"></i> <?php echo e(getPhrase('Menus')); ?></a>
                <ul class="collapse list-unstyled" id="menumenu" data-parent="#accordion">
                <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_MENU); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php if(isModuleEligible('Menus', array('Add'))): ?>
                <li class="<?php echo e(isActive($sub_active, 'add')); ?>"><a href="<?php echo e(URL_MENU_ADD); ?>"><i class="fa fa-plus"></i> <?php echo e(getPhrase('add')); ?></a></li> <?php endif; ?> </ul>
              </li> 
              <?php endif; ?> 
              <?php if(isModuleEligible('Settings') || isModuleEligible('Languages')): ?>
							<li class="<?php echo e(isActive($main_active, 'settings')); ?>">
								<a href="#settingmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fa fa-cog mr-2"></i> <?php echo e(getPhrase('settings')); ?>

								</a>
								<ul class="collapse list-unstyled" id="settingmenu" data-parent="#accordion"> <?php if(isModuleEligible('Settings')): ?>
                  <li class="<?php echo e(isActive($sub_active, 'list')); ?>"><a href="<?php echo e(URL_MASTERSETTINGS_SETTINGS); ?>"><i class="fa fa-list"></i> <?php echo e(getPhrase('list')); ?></a></li> <?php endif; ?> <?php if(isModuleEligible('Languages')): ?>
                  <li class="<?php echo e(isActive($sub_active, 'languages')); ?>">
                      <a href="<?php echo e(URL_LANGUAGES_LIST); ?>"> <i class="fa fa-language" aria-hidden="true"></i> <?php echo e(getPhrase('languages')); ?> </a>
                  </li> <?php endif; ?> 
                </ul>
              </li> 
              <?php endif; ?>
							 
						</ul>
					</nav>
          
          <?php echo $__env->yieldContent('content'); ?>


				</div>
			</div>

			<!--footer-->
			<?php 
				$copy_rights = getSetting('copy_rights', 'site_settings');
			 ?>
			<?php if($copy_rights !=''): ?>
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
						<?php echo $copy_rights; ?>	
						</div>
					</div>
				</div>
			</footer>
			<?php endif; ?>
 

			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
  
    <!-- Dashboard Core -->
    <script src="<?php echo e(ASSETS); ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    
	<!-- <script src="<?php echo e(ASSETS); ?>asset\js\vendors\jquery-3.2.1.min.js"></script> -->

      <!-- <script src="<?php echo e(ASSETS); ?>bootstrap/js/bootstrap.min.js"></script> -->
    <!-- SlimScroll -->
    <script src="<?php echo e(ASSETS); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo e(ASSETS); ?>plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(ASSETS); ?>dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(ASSETS); ?>dist/js/demo.js"></script>
    <script src="<?php echo e(JS); ?>sweetalert-dev.js"></script>

		<script src="<?php echo e(ASSETS); ?>asset\js\vendors\bootstrap.bundle.min.js"></script>
		<script src="<?php echo e(ASSETS); ?>asset\js\vendors\jquery.sparkline.min.js"></script>
		<script src="<?php echo e(ASSETS); ?>asset\js\vendors\selectize.min.js"></script>
		<!-- <script src="<?php echo e(ASSETS); ?>asset\js\vendors\jquery.tablesorter.min.js"></script> -->
		<script src="<?php echo e(ASSETS); ?>asset\js\vendors\circle-progress.min.js"></script>
		<script src="<?php echo e(ASSETS); ?>asset\plugins\rating\jquery.rating-stars.js"></script>
			
			<script src="<?php echo e(JS); ?>bootstrap-toggle.min.js"></script>
		<script src="<?php echo e(JS); ?>jquery.dataTables.min.js"></script>
		<script src="<?php echo e(JS); ?>dataTables.bootstrap.min.js"></script>
		<!-- Fullside-menu Js-->
		<script src="<?php echo e(ASSETS); ?>asset\plugins\fullside-menu\jquery.slimscroll.min.js"></script>
		<script src="<?php echo e(ASSETS); ?>asset\plugins\fullside-menu\waves.min.js"></script>
    
    <!-- <script src="<?php echo e(ASSETS); ?>asset\plugins\datatable\jquery.dataTables.min.js"></script>
		<script src="<?php echo e(ASSETS); ?>asset\plugins\datatable\dataTables.bootstrap4.min.js"></script> -->

		<!-- Select2 js -->
		<script src="<?php echo e(ASSETS); ?>asset\plugins\select2\select2.full.min.js"></script>
    
		<!-- Dashboard Core -->
		<!-- <script src="<?php echo e(ASSETS); ?>asset\js\index1.js"></script> -->

		<!--Morris.js Charts Plugin -->
		<script src="<?php echo e(ASSETS); ?>asset\plugins\morris\raphael-min.js"></script>
		<script src="<?php echo e(ASSETS); ?>asset\plugins\morris\morris.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo e(ASSETS); ?>asset\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom Js-->
    <script src="<?php echo e(ASSETS); ?>asset\js\custom.js"></script>
    <!-- <script>
			$(function(e) {
				$('#example2').DataTable();
			} );
		</script> -->
		<?php echo $__env->make('errors.formMessages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('footer_scripts'); ?>
    <script type="text/javascript">
            var csrfToken = $('[name="csrf_token"]').attr('content');

            setInterval(refreshToken, 3600000); // 1 hour 

            function refreshToken(){
                $.get('refresh-csrf').done(function(data){
                    csrfToken = data; // the new token
                });
            }

            setInterval(refreshToken, 3600000); // 1 hour 

        </script>
	</body>
</html>