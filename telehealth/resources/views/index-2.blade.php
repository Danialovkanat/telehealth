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
			
			<section class="section section-specialities " style="background: linear-gradient(45deg, #5069ba, #b38fb8) no-repeat;" >
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2 style="color: white;">Clinic and Specialities</h2>
						<p class="sub-title" style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">
							
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="/img/specialities/specialities-01.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p style="color: white;">Urology</p>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="/img/specialities/specialities-02.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p style="color: white;">Neurology</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="/img/specialities/specialities-03.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p style="color: white;">Orthopedic</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="/img/specialities/specialities-04.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p style="color: white;">Cardiologist</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p style="color: white;">Dentist</p>
								</div>							
								<!-- /Slider Item -->
								
							</div>
							<!-- /Slider -->
							
								
							
							
						</div>
						
					</div>
					<div style="text-align: center; margin-top: 50pt;">
					<h2 style="color: white ;">Make your request</h2>
								<a href = "request" type="button"  class="nav-link header-login" style="margin-top: 25pt;">Make a request</a>
				</div>

							</div>   
			</section>	 


			 <!-- Availabe Features -->
			 <section class="section section-features "  style="background: linear-gradient(45deg, #5069ba, #b38fb8) no-repeat;">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-md-5 features-img">
							<img src="/img/features/feature.png" class="img-fluid" alt="Feature">
						</div>
						<div class="col-md-7">
							<div class="section-header">	
								<h2 class="mt-2" style="color: white;">Availabe Features in Our Clinic</h2>
								<p style="color: white;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
							</div>	
							<div class="features-slider slider">
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="/img/features/feature-01.jpg" class="img-fluid" alt="Feature">
									<p style="color: white;">Patient Ward</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="/img/features/feature-02.jpg" class="img-fluid" alt="Feature">
									<p style="color: white;"> Test Room</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="/img/features/feature-03.jpg" class="img-fluid" alt="Feature">
									<p style="color: white;">ICU</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="/img/features/feature-04.jpg" class="img-fluid" alt="Feature">
									<p style="color: white;">Laboratory</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="/img/features/feature-05.jpg" class="img-fluid" alt="Feature">
									<p style="color: white;">Operation</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="/img/features/feature-06.jpg" class="img-fluid" alt="Feature">
									<p style="color: white;">Medical</p>
								</div>
								<!-- /Slider Item -->
							</div>
						</div>
				   </div>
				</div>
				
			</section>	
				
			<!-- Availabe Features -->
			<!-- Clinic and Specialities -->
		  
			<!-- Popular Section -->

			<div style="display:flex" >
			<section class="section section-doctor " style="background: linear-gradient(45deg, #5069ba, #b38fb8) no-repeat;">
				<div class="container-fluid">
				   <div class="row">
				   <h1 class="faq-heading" style="color: white;">FAQ'S</h1>
        <section class="faq-container">
         <div class="faq-one">
                <!-- faq question -->
                <h5 class="faq-page">What is a telehealth about?</h5 >
                 <!-- faq answer -->
            <div class="faq-body">
                    <p style="color: white;">Telehealth is the use of digital information and communication technologies, such as computers and mobile devices, to access health care services remotely and manage your health care. </p>
          </div>
      </div>
      <hr class="hr-line">
      <div class="faq-two">
            <!-- faq question -->
             <h5 class="faq-page">What is the main purpose of your organization?</h5>
            <!-- faq answer -->
            <div class="faq-body">
                 <p style="color: white;">Our main goal is to provide online appointments that would be convenient for everyone and to connect doctors all over the country. 
                </p>
           </div>
      </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
                <h5 class="faq-page">How to leave a request for an appointment?</h5>
                <!-- faq answer -->
                <div class="faq-body">
                      <p style="color: white;">Press the button 'leave a request', select the emergency level, don't forget to specify your complaints. Then you just have to wait for a notification about confirmation. </p>
                </div>
            </div>
            <hr class="hr-line">
      <div class="faq-two">
            <!-- faq question -->
             <h5 class="faq-page">What is the difference between levels of emergency? </h5>
            <!-- faq answer -->
            <div class="faq-body">
                 <p style="color: white;">The 'red' level is only for immediate cases, waiting for confirmation will take you 2 minutes at most. 
                    <br>The ‘yellow’ level is for medium cases. You may wait for the response for 1 hour(at most).
                    
                    <br>The ‘green’ level is for non-urgent cases. You may wait for the response for 2 hours (at most). 
                    </p>
           </div>
      </div>
      <hr class="hr-line">
      <div class="faq-two">
            <!-- faq question -->
             <h5 class="faq-page">Why do you need a Telehealth?</h5>
            <!-- faq answer -->
            <div class="faq-body">
                 <p style="color: white;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                  necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                  aperiam.
                  Perspiciatis, porro!</p>
           </div>
      </div>

     </section>
						<div class="col-lg-8">
							<div class="doctor-slider slider">
							
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="/img/doctors/doctor-01.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Aliya Abay</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MDS - Periodontology and Oral Implantology, BDS</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<span class="d-inline-block average-rating">(17)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Almaty, Kazakhstan
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 19 Nov
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> 3000 - 10000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
									
									</div>
								</div>
								<!-- /Doctor Widget -->
						
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="/img/doctors/doctor-02.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Dauren Darishev</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(35)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Nur-Sultan, Kazakhstan
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 19 Nov
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> 5000 - 15000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>

									</div>
								</div>
								<!-- /Doctor Widget -->
						
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="/img/doctors/doctor-03.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Darina Beketova</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(27)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Nur-Sultan, Kazakhstan
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 19 Nov
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> 10000 - 15000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										
									</div>
								</div>
								<!-- /Doctor Widget -->
						
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="/img/doctors/doctor-04.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Aliya Bolatova</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(4)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Aktobe, Kazakhstan
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 19 Nov
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> 15000 - 25000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										
									</div>
								</div>
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="/img/doctors/doctor-05.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Aibek Rauan</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(66)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Taraz, Kazakhstan
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 19 Nov
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> 5000 - 7000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										
									</div>
								</div>
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="/img/doctors/doctor-06.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Aruzhan Samatova</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(52)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Pavlodar, Kazakhstan
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 19 Nov
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> 10000 - 15000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										
									</div>
								</div>
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="/img/doctors/doctor-07.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Leile Rahatova</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(43)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Kostanay, Kazakhstan
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 19 Nov
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> 10000 - 10000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										
									</div>
								</div>
								<!-- /Doctor Widget -->
								
								<!-- Doctor Widget -->
								<div class="profile-widget">
									<div class="doc-img">
										<a href="doctor-profile.html">
											<img class="img-fluid" alt="User Image" src="/img/doctors/doctor-08.jpg">
										</a>
										<a href="javascript:void(0)" class="fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
									</div>
									<div class="pro-content">
										<h3 class="title">
											<a href="doctor-profile.html">Saken Zhantasov</a> 
											<i class="fas fa-check-circle verified"></i>
										</h3>
										<p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
										<div class="rating">
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star"></i>
											<span class="d-inline-block average-rating">(49)</span>
										</div>
										<ul class="available-info">
											<li>
												<i class="fas fa-map-marker-alt"></i> Almaty, Kazakhstan
											</li>
											<li>
												<i class="far fa-clock"></i> Available on Fri, 19 Nov
											</li>
											<li>
												<i class="far fa-money-bill-alt"></i> 10000 - 20000 
												<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
											</li>
										</ul>
										
									</div>
								</div>
								<!-- Doctor Widget -->
								
							</div>
						</div>
				   </div>
				</div>
			</section>
</div>

			<!-- /Popular Section -->
		
			
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
		<script src="/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="/js/script.js"></script>


		<style>

svg #rotated {
  transform-box: fill-box;
  transform-origin: center;
  transform: rotate(29deg);
}

#logo_text{
	color:#203e4f;
}

</style>

 
		
	</body>

<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
</html>