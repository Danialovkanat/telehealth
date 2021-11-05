<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
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
	<body style="background: linear-gradient(45deg, #5069ba, #b38fb8) no-repeat;">


        

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

            <div class="card" style= "background-color: #5069ba; padding-left: 160px; padding-right: 160px; padding-top: 40px">
                <div class="card-body">
                
                    <!-- Checkout Form -->
                    <form action="https://dreamguys.co.in/demo/doccure/booking-success.html">
                    
                        <!-- Personal Information -->
                        <div class="info-widget">
                            <h4 class="card-title">Personal Information</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group card-label">
                                        <label>First Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group card-label">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group card-label">
                                        <label>Email</label>
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group card-label">
                                        <label>Phone</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="exist-customer">Existing Customer? <a href='login'>Click here to login</a></div>
                        </div>
                        <!-- /Personal Information -->
                        
                        <div class="payment-widget">
                            <h4 class="card-title">Payment Method</h4>
                            
                            <!-- Credit Card Payment -->
                            <div class="payment-list">
                                <label class="payment-radio credit-card-option">
                                    <input type="radio" name="radio" checked>
                                    <span class="checkmark"></span>
                                    Credit card
                                </label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group card-label">
                                            <label for="card_name">Name on Card</label>
                                            <input class="form-control" id="card_name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group card-label">
                                            <label for="card_number">Card Number</label>
                                            <input class="form-control" id="card_number" placeholder="1234  5678  9876  5432" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group card-label">
                                            <label for="expiry_month">Expiry Month</label>
                                            <input class="form-control" id="expiry_month" placeholder="MM" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group card-label">
                                            <label for="expiry_year">Expiry Year</label>
                                            <input class="form-control" id="expiry_year" placeholder="YY" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group card-label">
                                            <label for="cvv">CVV</label>
                                            <input class="form-control" id="cvv" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Credit Card Payment -->
                            
                            <!-- Paypal Payment -->
                            <div class="payment-list">
                                <label class="payment-radio paypal-option">
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                    Paypal
                                </label>
                            </div>
                            <!-- /Paypal Payment -->
                            
                            <!-- Terms Accept -->
                            <div class="terms-accept">
                                <div class="custom-checkbox">
                                   <input type="checkbox" id="terms_accept">
                                   <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
                                </div>
                            </div>
                            <!-- /Terms Accept -->
                            
                            <!-- Submit Section -->
                            <div class="submit-section mt-4">
                                <button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
                            </div>
                            <!-- /Submit Section -->
                            
                        </div>
                    </form>
                    <!-- /Checkout Form -->
                    
                </div>
            </div>
            

			<!-- /Header -->

			
			
			
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
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
</html>