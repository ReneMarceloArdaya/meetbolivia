<?php
header('Content-Type: text/html; charset=UTF-8');

// Definir el mensaje de bienvenida con emojis directamente
$welcomeMessage = "¡Hola! 👋\n\n";
$welcomeMessage .= "¡Bienvenido a MeetBolivia By VTG! 🎉\n";
$welcomeMessage .= "Estamos emocionados de ayudarte con tu interés en nuestro paquete.\n\n";
$welcomeMessage .= "📋 **Nombre del Paquete**: " . $package->nombre . "\n";
$welcomeMessage .= "📝 **Descripción**: " . $package->descripcion . "\n";
$welcomeMessage .= "🔍 **Detalles**: " . $package->detalles . "\n";
$welcomeMessage .= "💵 **Precio**: $" . $package->precio . "\n";
$welcomeMessage .= "👶 **Niños**: " . $package->cantidad_de_niños . "\n";
$welcomeMessage .= "👨‍👩‍👧‍👦 **Adultos**: " . $package->cantidad_de_adultos . "\n";
$welcomeMessage .= "\n\nEstamos aquí para responder cualquier pregunta que puedas tener. ¡Esperamos tu mensaje! 😊";

// Codificar el mensaje para la URL
$encodedMessage = rawurlencode($welcomeMessage); // Usar rawurlencode
$phoneNumber = '+59177828012'; // Reemplaza con el número de teléfono real
$whatsappUrl = "https://api.whatsapp.com/send?phone=$phoneNumber&text=$encodedMessage";


?>

 
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Portfolio Details</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('home')}}#about">About</a></li>
							<li class="nav-item"><a class="nav-link" href="{{route('home')}}#services">Services</a></li>
							<li class="nav-item active"><a class="nav-link" href="#top">Portfolio</a></li>
							
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                            <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">EN</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="elements.html">EN</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">ES</a></li>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">PT</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->


    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Portfolio Details</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="portfolio.html">Portfolio</a>
                        <a href="portfolio-details.html">Portfolio Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

	<!--================Start Portfolio Details Area =================-->
	<section class="portfolio_details_area section_gap">
        <div class="container">
            <div class="portfolio_details_inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left_img">
                            <!-- Asegúrate de que la ruta de la imagen sea correcta -->
                            <img class="img-fluid" src="{{ asset('uploads/' . $package->imagen) }}" alt="{{ $package->nombre }}">
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-5">
                        <div class="portfolio_right_text mt-30">
                            <h4 class="text-uppercase">{{ $package->nombre }}</h4>
                            <p>{{ $package->descripcion }}</p>
                            <p>{{ $package->detalles }}</p>
                            <ul class="list">
                                <li><span>Precio</span>: ${{ $package->precio }}</li>
                                <li><span>Niños</span>: {{ $package->cantidad_de_niños }}</li>
                                <li><span>Adultos</span>: {{ $package->cantidad_de_adultos }}</li>
                            </ul>
                        </div>
                        

                        <!-- Botones Personalizar y Cotizar -->
                        <div class="d-flex align-items-center" style="margin-top: 20px; gap: 15px;">
                            <a class="primary_btn" href="{{ $whatsappUrl }}"><span>Cotizar</span></a>
                            
                        </div>
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="testi_slider owl-carousel">
                        @foreach($package->imagenes as $image)
                            <div class="testi_item">
                                <div class="row no-gutters">
                                    <div class="col-lg-12">
                                        <div class="testi_img">
                                            <img src="{{ asset('uploads/' . $image->imagen) }}" alt="{{ $package->nombre }}">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                
                <!-- Asegúrate de que cualquier otro dato relevante se muestre aquí -->
            </div>
             <!-- carusel-->
        </div>
    </section>
    
    <!--================End Portfolio Details Area =================-->

    
    <!--================ Start Newsletter Area =================-->
    <section class="newsletter_area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="subscription_box text-center">
                        <h2 class="text-uppercase text-white">get update from anywhere</h2>
                        <p class="text-white">
                            Bearing Void gathering light light his eavening unto dont afraid. 
                        </p>
                        <div class="subcribe-form" id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                                <input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>
                                <button class="primary-btn hover d-inline">Get Started</button>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Newsletter Area =================-->
        
    <!--================Footer Area =================-->
	<footer class="footer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_top flex-column">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                            <h4>Follow Me</h4>
                        </div>
                        <div class="footer_social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_bottom justify-content-center">
                <p class="col-lg-8 col-sm-12 footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>