<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>.:adcpc:. | Ass. de Deus</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Belgrano:400" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">

		<!-- Loading main css file -->
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		<div class="site-content">
			<div class="site-header header-collapsed">
				<div class="container">
					<div class="header-bar">
                        <a href="{{ url('/') }}" class="branding">
							<img src="img/home/logo.png" alt="" class="logo">
							<h1 class="site-title">Ass. de Deus Central de Ponto Chic</h1>
						</a>

						<!-- Default snippet for navigation -->
						<div class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item current-menu-item"><a href="#about">Sobre Nós</a></li>
								<li class="menu-item"><a href="#pastors">Ministros</a></li>
								<li class="menu-item"><a href="#events">Eventos</a></li>
								<li class="menu-item"><a href="#seremons">Sermões</a></li>
								<li class="menu-item"><a href="{{ route('login') }}">Membros</a></li>
								<li class="menu-item"><a href="#families">Deptos</a></li>
								<li class="menu-item"><a href="#contact">Contato</a></li>
							</ul> <!-- .menu -->
						</div> <!-- .main-navigation -->

						<div class="mobile-navigation"></div>
						
					</div>
				</div>
			</div> <!-- .site-header -->

			<div class="hero">
				<ul class="slides">
					<li data-bg-image="img/home/slider-1.jpg">
						<div class="container">
							<div class="slide-content">
								<h1 class="slide-title">Culto de Terça-feira</h1>
								<small class="date">Com início as 19:30</small>
								<p>Culto da vitória. Para todos que desejam e precisam alcançar uma vitória para sua vida.</p>
								<a href="#" class="button">Mais informações...</a>
							</div>
						</div>
					</li>

					<li data-bg-image="img/home/slider-1.jpg">
						<div class="container">
							<div class="slide-content">
								<h1 class="slide-title">Culto de Quinta-feira</h1>
								<small class="date">Com início as 19:30</small>
								<p>Culto de Estudo da Bíblia. Para todos que amam a Palavra de Deus e desejam aprender mais.</p>
								<a href="#" class="button">Mais informações...</a>
							</div>
						</div>
					</li>
					<li data-bg-image="img/home/slider-1.jpg">
						<div class="container">
							<div class="slide-content">
								<h1 class="slide-title">Cultos de Domingo</h1>
								<small class="date">EBD pela Manhã as 8:30h</small>
								<p>Escola Bíblica Dominical. Estudo doutrinário a respeito da Bíblia.</p>
								<small class="date">Culto Público, com início as 19h</small>
								<p>Culto destinado a comunhão com Deus e as famílias. Para todos que esperam ouvir uma mensagem de esperança e amor.</p>
								<a href="#" class="button">Mais informações...</a>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">
				<div id="about" class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<div class="feature-icon"><img src="img/home/icon-church.png" alt="" class="icon"></div>
									<h2 class="feature-title">Quem somos?</h2>
									<p>Uma igreja evangélica Cristã que tem como missão pregar as boas novas de salvação de nosso Senhor Jesus Cristo.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<div class="feature-icon"><img src="img/home/icon-candles.png" alt="" class="icon"></div>
									<h2 class="feature-title">O Que Cremos?</h2>
									<p>Cremos que há somente um Deus criador dos céus e da terra e somente um mediador entre o Deus e os homens; Jesus Cristo nosso Senhor.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<div class="feature-icon"><img src="img/home/icon-cross.png" alt="" class="icon"></div>
									<h2 class="feature-title">Nossa Fé</h2>
									<p>Ela é baseada na Bíblia, que é para nós um manual de regra de fé e prática.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<div class="feature-icon"><img src="img/home/icon-cross.png" alt="" class="icon"></div>
									<h2 class="feature-title">Amor...</h2>
									<p>Jesus é a expressessão do verdadeiro amor, quando na cruz se entregou em sacrifício por todos nós para nos libertar.</p>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- #about -->

				<div id="pastors" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<h2 class="section-title">Nossos Ministros</h2>
						<p class="section-intro">Para desempenho de uma grande obra, Deus envia os seus sevos obreiros para uma unica missão: pregar a chegada do Seu Reino.</p>

						<div class="row center-block">
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="pastor">
									<img src="img/home/pastor-1.jpg" alt="" class="pastor-image">
									<h3 class="pastor-name">Adiel Leal</h3>
									<small class="date">Pastor Presidente</small>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="pastor">
									<img src="img/home/pastor-2.jpg" alt="" class="pastor-image">
									<h3 class="pastor-name">Vanderlei Lopes</h3>
									<small class="date">Vice Presidente</small>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="pastor">
									<img src="img/home/pastor-3.jpg" alt="" class="pastor-image">
									<h3 class="pastor-name">Valtair Moniz</h3>
									<small class="date">Presbítero</small>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="pastor">
									<img src="img/home/pastor-4.jpg" alt="" class="pastor-image">
									<h3 class="pastor-name">Celso Gonçalves</h3>
									<small class="date">Presbítero</small>
								</div>
							</div>
							{{-- <div class="col-md-2 col-sm-3 col-xs-6">
								<div class="pastor">
									<img src="img/home/pastor-5.jpg" alt="" class="pastor-image">
									<h3 class="pastor-name">Richard Star</h3>
									<small class="date">Joined 2008</small>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6">
								<div class="pastor">
									<img src="img/home/pastor-6.jpg" alt="" class="pastor-image">
									<h3 class="pastor-name">Steven Dawkins</h3>
									<small class="date">Joined 2010</small>
								</div>
							</div> --}}
						</div> <!-- .row -->

						<div class="text-center">
							<a href="#" class="button">View all our pastors</a>
						</div>
					</div> <!-- .container -->
				</div> <!-- #pastors -->

				<div id="events" class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Upcoming events</h2>
						<div class="text-center">
							<a href="#" class="prev-events"><img src="img/home/arrow-left.png" alt=""></a>
							<a href="#" class="next-events"><img src="img/home/arrow-right.png" alt=""></a>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="img/home/event-1.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="#">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="img/home/event-2.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="img/home/event-3.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="event">
									<img src="img/home/event-4.jpg" alt="" class="event-image">
									<h3 class="event-title"><a href="">Nam libero tempore cum soluta nobis eligendi</a></h3>
									<div class="event-meta"><span class="date"><i class="fa fa-calendar"></i> 02/04/2014</span><span class="location"><i class="fa fa-map-marker"></i>Los Angeles</span></div>
									<a href="#" class="button">Get more information</a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- #events -->

				<div id="seremons" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<h3 class="section-title">Upcoming seremons</h3>
								<ul class="seremon-list">
									<li>
										<h3 class="seremon-title"><a href="#">Labore et dolore magna aliqua</a></h3>
										<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipommodo consequat.</p>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong> 05/04/2014</span>
											<span><i class="fa fa-user"></i> <strong>Pastor:</strong> John Birman</span>
										</div>
									</li>
									<li>
										<h3 class="seremon-title"><a href="#">Labore et dolore magna aliqua</a></h3>
										<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipommodo consequat.</p>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong> 05/04/2014</span>
											<span><i class="fa fa-user"></i> <strong>Pastor:</strong> John Birman</span>
										</div>
									</li>
									<li>
										<h3 class="seremon-title"><a href="#">Labore et dolore magna aliqua</a></h3>
										<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipommodo consequat.</p>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong> 05/04/2014</span>
											<span><i class="fa fa-user"></i> <strong>Pastor:</strong> John Birman</span>
										</div>
									</li>
								</ul>

								<a href="#" class="button">See all upcoming seremons</a>
							</div>
							<div class="col-md-5 col-md-offset-2">
								<h3 class="section-title">Latest seremons</h3>
								<ul class="seremon-list">
									<li>
										<h3 class="seremon-title"><a href="#">Labore et dolore magna aliqua</a></h3>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong> 05/04/2014</span>
											<span><i class="fa fa-user"></i> <strong>Pastor:</strong> John Birman</span>
										</div>
										<a href="#" class="button secondary"><img src="img/home/icon-headset.png" alt="" class="icon"> Audio record</a>
										<a href="#" class="button secondary"><img src="img/home/icon-film.png" alt=""> Video record</a>
									</li>
									<li>
										<h3 class="seremon-title"><a href="#">Labore et dolore magna aliqua</a></h3>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong> 05/04/2014</span>
											<span><i class="fa fa-user"></i> <strong>Pastor:</strong> John Birman</span>
										</div>
										<a href="#" class="button secondary"><img src="img/home/icon-headset.png" alt="" class="icon"> Audio record</a>
										<a href="#" class="button secondary"><img src="img/home/icon-film.png" alt=""> Video record</a>
									</li>
									<li>
										<h3 class="seremon-title"><a href="#">Labore et dolore magna aliqua</a></h3>
										<div class="seremon-meta">
											<span><i class="fa fa-calendar"></i> <strong>Date:</strong> 05/04/2014</span>
											<span><i class="fa fa-user"></i> <strong>Pastor:</strong> John Birman</span>
										</div>
										<a href="#" class="button secondary"><img src="img/home/icon-headset.png" alt="" class="icon"> Audio record</a>
										<a href="#" class="button secondary"><img src="img/home/icon-film.png" alt=""> Video record</a>
									</li>
								</ul>

								<a href="#" class="button">See all latest seremons</a>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- #seremons -->

				<div id="families" class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Our families</h2>
						<p class="section-intro">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco.</p>

						<div class="family-list">
							<figure class="family">
								<img src="img/home/family-1.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<figure class="family">
								<img src="img/home/family-2.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<figure class="family">
								<img src="img/home/family-3.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<figure class="family">
								<img src="img/home/family-4.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<figure class="family">
								<img src="img/home/family-5.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<figure class="family">
								<img src="img/home/family-6.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<figure class="family">
								<img src="img/home/family-7.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<figure class="family">
								<img src="img/home/family-8.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<figure class="family">
								<img src="img/home/family-9.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
							<figure class="family">
								<img src="img/home/family-10.jpg" alt="">
								<figcaption>
									<h3 class="family-name">Harrison</h3>
									<span class="arrow"></span>
								</figcaption>
							</figure>
						</div>

						<hr class="space">
						<div class="text-center">
							<a href="#" class="button">View all families</a>
						</div>
					</div> <!-- .container -->
				</div> <!-- #families -->

				<div id="contact" class="fullwidth-block" data-bg-color="#4a3173">
					<div class="container">
						<h2 class="section-title">Contact us</h2>
						<p class="section-intro">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>

						<div class="contact-detail">
							<span><img src="img/home/icon-marker.png" alt="" class="icon"> 294 Samuelson Rd, portage</span>
							<span><img src="img/home/icon-phone.png" alt="" class="icon"> (989) 589 423 553</span>
							<span><img src="img/home/icon-envelope.png" alt="" class="icon"> contact@patrichchurch.com</span>
						</div>

						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<div class="control"><input type="text" placeholder="Your name..."><img src="img/home/icon-user.png" alt="" class="icon"></div>
									<div class="control"><input type="text" placeholder="Email..."><img src="img/home/icon-email.png" alt="" class="icon"></div>
									<div class="control"><input type="text" placeholder="Website..."><img src="img/home/icon-globe.png" alt="" class="icon"></div>
								</div>
								<div class="col-md-6">
									<div class="control">
										<textarea name="" placeholder="Your message..."></textarea>
										<img src="img/home/icon-pen.png" alt="" class="icon">
									</div>
									<p class="text-right">
										<input type="submit" value="Send message">
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>

				 <div class="map" data-latitude="-6.897789" data-longitude="107.621735"></div>
			</main>
		</div>

		

        <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
        <script src="{{ asset('js/home.js') }}"></script>
		
	</body>

</html>