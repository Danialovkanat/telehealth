<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/video-call.html  30 Nov 2019 04:12:18 GMT -->
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
	<body class="call-page">

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
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
				
					<!-- Call Wrapper -->
					<div class="call-wrapper">
						<div class="call-main-row">
							<div class="call-main-wrapper">
								<div class="call-view">
									<div class="call-window">
									
										<!-- Call Header -->
										<div class="fixed-header">
											<div class="navbar">
												<div class="user-details">
													<div class="float-left user-img">
														<a class="avatar avatar-sm mr-2" href="patient-profile.html" title="Charlene Reed">
															<img src="/img/patients/patient1.jpg" alt="User Image" class="rounded-circle">
															<span class="status online"></span>
														</a>
													</div>
													<div class="user-info float-left">
														<a href="patient-profile.html"><span>Charlene Reed</span></a>
														<span class="last-seen">Online</span>
													</div>
												</div>
												<ul class="nav float-right custom-menu">
													<li class="nav-item dropdown dropdown-action">
														<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="javascript:void(0)" class="dropdown-item">Settings</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Call Header -->
										
										<!-- Call Contents -->
										<div class="call-contents">
											<div class="call-content-wrap">
												<div class="user-video">
													<img src="/img/video-call.jpg" alt="User Image">
												</div>
												<div class="my-video">
													<ul>
														<li>
															<img src="/img/patients/patient1.jpg" class="img-fluid" alt="User Image">
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- Call Contents -->
										
										<!-- Call Footer -->
										<div class="call-footer">
											<div class="call-icons">
												<span class="call-duration">00:59</span>
												<ul class="call-items">
													<li class="call-item">
														<a href="#" title="Enable Video" data-placement="top" data-toggle="tooltip">
															<i class="fas fa-video camera"></i>
														</a>
													</li>
													<li class="call-item">
														<a href="#" title="Mute Audio" data-placement="top" data-toggle="tooltip">
															<i class="fa fa-microphone microphone"></i>
														</a>
													</li>
													<li class="call-item">
														<a href="#" title="Add User" data-placement="top" data-toggle="tooltip">
															<i class="fa fa-user-plus"></i>
														</a>
													</li>
													<li class="call-item">
														<a href="#" title="Full Screen" data-placement="top" data-toggle="tooltip">
															<i class="fas fa-arrows-alt-v full-screen"></i>
														</a>
													</li>
												</ul>
												<div class="end-call">
													<a href="javascript:void(0);">
														<i class="material-icons">call_end</i>
													</a>
												</div>
											</div>
										</div>
										<!-- /Call Footer -->
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!-- /Call Wrapper -->
					
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
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/video-call.html  30 Nov 2019 04:12:18 GMT -->
</html>