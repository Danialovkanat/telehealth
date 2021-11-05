<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/my-patients.html  30 Nov 2019 04:12:09 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Telehealth</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="{{ asset('/img/favicon.png')}}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}" type="text/css">
		
		<!-- Fontawesome CSS -->
		<link href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{ asset('/plugins/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Main CSS -->
		<link href="{{ asset('/css/style.css')}}" rel="stylesheet" type="text/css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="/js/html5shiv.min.js"></script>
			<script src="/js/respond.min.js"></script>
		<![endif]-->

		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav  class="navbar navbar-expand-lg header-nav " style="height:150px; background: linear-gradient(45deg, #5069ba, #b38fb8) no-repeat; border-bottom: 0;">
					<div class="navbar-header">
						
						<div style = "display:flex">
						<svg width="100%" height="100%">
                <rect width="72px" height="72px" x = "50", y = "35", rx="12", ry="12", style="fill:#b38fb8; opacity:0.9" />
                <rect id="rotated" width="72px" height="72px" x = "50", y = "35", rx="12", ry="12", style="fill:#b38fb8; opacity:0.9" />
                
                <image xlink:href="https://flaticons.net/icon.php?slug_category=people&slug_icon=doctor" height="48" width="48" x = "62", y = "45" style = "overflow:visible"/>
                <text id = "logo_text" style = "font-size:25px; font-weight:bold; stroke:rgb(22, 35, 61) 0.5px; fill: white" x = "155px" y="80">telehealth</text>
            <!--font-family: 'Roboto', sans-serif; font-size:30px-->
            </svg>
            
        </div>

					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							
								<img src="/img/logo.png" class="img-fluid" alt="Logo">
				
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav" style="padding-left : 50px">
							<li class="active">
								<a href="home" style="color: white;">Home</a>
							</li>
							<li class="has-submenu">
								<a href="#" style="color: white;">Doctors <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="doctor-dashboard" >Doctor Dashboard</a></li>
									<li><a href="appointments">Appointments</a></li>
									<li><a href="schedule-timings">Schedule Timing</a></li>
									<li><a href="my-patients" >Patients List</a></li>
									<li><a href="patient-profile" >Patients Profile</a></li>
									<li><a href="chat-doctor" >Chat</a></li>
									<li><a href="doctor-profile-settings">Profile Settings</a></li>
									<li><a href="reviews">Reviews</a></li>
									<li><a href="doctor-register">Doctor Register</a></li>
								</ul>
							</li>	
							<li class="has-submenu">
								<a href="#" style="color: white;">Patients <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="patient-dashboard" >Patient Dashboard</a></li>
							
									<li><a href="chat">Chat</a></li>
							
								</ul>
							</li>	
							<li class="has-submenu">
								<a href="#" style="color: white;">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="voice-call" >Voice Call</a></li>
									<li><a href="video-call" >Video Call</a></li>
								</ul>
							</li>
							
							<li class="login-link">
								<a href="login">Login / Signup</a>
							</li>
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-header"> +7 777 777 7777</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="login">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>
			
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar " style="background: linear-gradient(45deg, #5069ba, #b38fb8) no-repeat;">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">My Patients</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">My Patients</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. Dauren Darishev</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="doctor-dashboard.html">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="appointments.html">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li class="active">
												<a href="my-patients.html">
													<i class="fas fa-user-injured"></i>
													<span>My Patients</span>
												</a>
											</li>
											<li>
												<a href="schedule-timings.html">
													<i class="fas fa-hourglass-start"></i>
													<span>Schedule Timings</span>
												</a>
											</li>
											
											<li>
												<a href="reviews.html">
													<i class="fas fa-star"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="chat-doctor.html">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="doctor-profile-settings.html">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="social-media.html">
													<i class="fas fa-share-alt"></i>
													<span>Social Media</span>
												</a>
											</li>
											<li>
												<a href="doctor-change-password.html">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="index-2.html">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
						
							<div class="row row-grid">
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="patient-profile.html" class="booking-doc-img">
														<img src="/img/patients/patient.jpg" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3><a href="patient-profile.html">Richard Wilson</a></h3>
														
														<div class="patient-details">
															<h5><b>Patient ID :</b> P0016</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+7 777 777 7777</span></li>
													<li>Age <span>38 Years, Male</span></li>
													<li>Blood Group <span>AB+</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="patient-profile.html" class="booking-doc-img">
														<img src="/img/patients/patient1.jpg" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3><a href="patient-profile.html">Charlene Reed</a></h3>
														
														<div class="patient-details">
															<h5><b>Patient ID :</b> P0001</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+7 777 777 7777</span></li>
													<li>Age <span>29 Years, Female</span></li>
													<li>Blood Group <span>O+</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="/img/patients/patient2.jpg" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3>Travis Trimble </h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0002</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+7 777 777 7777</span></li>
													<li>Age <span>23 Years, Male</span></li>
													<li>Blood Group <span>B+</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="/img/patients/patient3.jpg" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3>Carl Kelly</h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0003</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+7 777 777 7777</span></li>
													<li>Age <span>32 Years, Male</span></li>
													<li>Blood Group <span>A+</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="/img/patients/patient4.jpg" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3>Michelle Fairfax</h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0004</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+7 777 777 7777</span></li>
													<li>Age <span>25 Years, Female</span></li>
													<li>Blood Group <span>B+</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="/img/patients/patient5.jpg" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3>Gina Moore</h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0005</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+7 777 777 7777</span></li>
													<li>Age <span>25 Years, Female</span></li>
													<li>Blood Group <span>AB-</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="/img/patients/patient6.jpg" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3>Elsie Gilley</h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0006</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+1 315 384 4562</span></li>
													<li>Age <span>14 Years, Female</span></li>
													<li>Blood Group <span>O-</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="/img/patients/patient7.jpg" alt="User Image">
													</a>
													<div class="profile-det-info">
														<h3>Joan Gardner</h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0007</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+1 707 2202 603</span></li>
													<li>Age <span>25 Years, Female</span></li>
													<li>Blood Group <span>A-</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="assets/img/patients/patient8.jpg" alt="User Image">
													</a>
													<div class=le-det-info">
														<h3>Daniel Griffing</h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0007</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+1 973 773 9497</span></li>
													<li>Age <span>28 Years, Male</span></li>
													<li>Blood Group <span>O+</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="assets/img/patients/patient9.jpg" alt="User Image">
													</a>
													<div class=le-det-info">
														<h3>Walter Roberson</h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0009</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+1 850 358 4445</span></li>
													<li>Age <span>28 Years, Male</span></li>
													<li>Blood Group <span>A+</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="assets/img/patients/patient10.jpg" alt="User Image">
													</a>
													<div class=le-det-info">
														<h3>Robert Rhodes</h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0010</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+1 858 259 5285</span></li>
													<li>Age <span>19 Years, Male</span></li>
													<li>Blood Group <span>B+</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="card widget-profile pat-widget-profile">
										<div class="card-body">
											<div class="pro-widget-content">
												<div class="profile-info-widget">
													<a href="#" class="booking-doc-img">
														<img src="assets/img/patients/patient11.jpg" alt="User Image">
													</a>
													<div class=le-det-info">
														<h3>Harry Williams</h3>
														<div class="patient-details">
															<h5><b>Patient ID :</b> PT0011</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="patient-info">
												<ul>
													<li>Phone <span>+1 303 607 7075</span></li>
													<li>Age <span>9 Years, Male</span></li>
													<li>Blood Group <span>A-</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
							</div>

						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									
									<div class="footer-about-content">
										<p style="color: white; font-size: 20px; font-weight: bold; padding-left:15px">Us in social media </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="https://www.instagram.com/telehealth.kz/" target="_blank" style="padding-left: 15px"><i class="fab fa-instagram"></i></a>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
								
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> Abay street, 174<br> Almaty, Kazakhstan </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+7 777 777 7777
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											telehealth@gmail.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/my-patients.html  30 Nov 2019 04:12:09 GMT -->
</html>