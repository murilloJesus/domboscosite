<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Colégio Dom Bosco - Sorocaba</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="icon" type="image/png" href="/images/icon.png" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />

        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/jquery.dropotron.min.js"></script>
        <script src="/assets/js/jquery.scrolly.min.js"></script>
        <script src="/assets/js/browser.min.js"></script>
        <script src="/assets/js/breakpoints.min.js"></script>
        <script src="/assets/js/util.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/main.js"></script>

        <script src="{{ asset('/js/app.js') }}" defer></script>
	</head>
	<body class="homepage is-preload" id="app">
		<div id="page-wrapper" >
			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.html">Home</a></li>
						<li>
							<a href="#">Colégio</a>
							<ul>
								<li><a href="#">História</a></li>
								<li><a href="#">Missão, Visão e Valores</a></li>
								<li>
									<a href="#">Proposta Pedagógica</a>
									<ul>
										<li><a href="#">Infantil</a></li>
										<li><a href="#">Fundamental</a></li>
										<li><a href="#">Material Didático</a></li>
									</ul>
								</li>
								<li><a href="#">Infraestrutura</a></li>
							</ul>
						</li>
						<li>
                            <a href="left-sidebar.html">Segmentos</a>
                            <ul>
                                <li><a href="#">Ensino Infantil</a></li>
                                <li><a href="#">Ensino Fundamental 1</a></li>
                                <li><a href="#">Ensino Fundamental 2</a></li>
                                <li><a href="#">Integral e Bílingue</a></li>
                                <li><a href="#">Curso Extracurriculares</a>
                                    <ul>
                                        <li><a href="">Ballet</a></li>
                                        <li><a href="">Bi-Bot</a></li>
                                        <li><a href="">Judô</a></li>
                                        <li><a href="">Robótica</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
						<li><a href="right-sidebar.html">Notícias</a></li>
						<li><a href="no-sidebar.html">Galerias</a></li>
						<li><a href="no-sidebar.html">Contato</a></li>
					</ul>
				</nav>


                <!-- Banner -->
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    {{-- <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 2"></button>
                    </div> --}}
                    <div class="carousel-inner">
                        <div id="banner" class="carousel-item banner-2">
                            <div class="content">
                                <h2>O Melhor ensino para seu filho </h2>
                                <p>Qualidade e cuidado deixe com a equipe do Colégio Múltiplo.</p>
                                <a href="#main" class="button scrolly" style="visibility: hidden">&nbsp;</a>
                            </div>
                        </div>
                        <div id="banner" class="carousel-item active banner-1">
                            <div class="content">
                                <h2>Colégio Dom Bosco</h3>
                                <p>Matriculas Abertas! Confira as nossas</p>
                                <a href="#main" class="button scrolly">Conferir</a>
                            </div>
                        </div>
                        <div id="banner" class="carousel-item banner-2">
                            <div class="content">
                                <h2>O Melhor ensino para seu filho </h2>
                                <p>Qualidade e cuidado deixe com a equipe do Colégio Múltiplo.</p>
                                <a href="#main" class="button scrolly" style="visibility: hidden">&nbsp;</a>
                            </div>
                        </div>
                        <div id="banner" class="carousel-item banner-1">
                            <div class="content">
                                <h2>Colégio Dom Bosco</h3>
                                <p>Matriculas Abertas! Confira as nossas</p>
                                <a href="#main" class="button scrolly">Conferir</a>
                            </div>
                        </div>
                        <div id="banner" class="carousel-item banner-2">
                            <div class="content">
                                <h2>O Melhor ensino para seu filho </h2>
                                <p>Qualidade e cuidado deixe com a equipe do Colégio Múltiplo.</p>
                                <a href="#main" class="button scrolly" style="visibility: hidden">&nbsp;</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row gtr-200">

                            <!-- DEPOIMENTOS -->

							<div class="col-12">

								<!-- Highlight -->
									<depoimentos></depoimentos>

							</div>

                            <!-- COLÉGIO -->
                            <colegio></colegio>

                            <!-- NOTICIAS -->
							<div class="col-12">

								<!-- Features -->
									<section class="box features">
										<h2 class="major"><span>Últimas Notícias</span></h2>
										<div>
											<div class="row">
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
															<h3><a href="#">A Subheading</a></h3>
															<p>
																Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
																lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
															</p>
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
															<h3><a href="#">Another Subheading</a></h3>
															<p>
																Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
																lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
															</p>
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
															<h3><a href="#">And Another</a></h3>
															<p>
																Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
																lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
															</p>
														</section>

												</div>
												<div class="col-3 col-6-medium col-12-small">

													<!-- Feature -->
														<section class="box feature">
															<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
															<h3><a href="#">And One More</a></h3>
															<p>
																Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
																lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
															</p>
														</section>

												</div>
											</div>
										</div>
									</section>

							</div>

                            {{-- GALERIA DE FOTOS --}}
                            <galeria></galeria>


						</div>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<div class="container">

                        <!-- About -->
                            <section>
                                <div class="row">
                                    <div class="col-4 col-12-medium">
                                        <h2 class="major"><span>Localização</span></h2>
                                        <iframe
                                            width="100%"
                                            style="border:0"
                                            loading="lazy"
                                            allowfullscreen
                                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA2TTydwZ7sVtWPIRxBZ5uatYuWyhHkcuc
                                                &q=Colégio+Dom+Bosco+Sorocaba">
                                        </iframe>
                                        <br><br>
                                        <strong>Colégio Dom Bosco Sorocaba</strong>
                                        <br><br>
                                        <p>Av. Mario José Azevedo de Almeida, 65 <br> Jardim Piazza Di Roma, Sorocaba <br> SP, 18051-740</p>
                                    </div>
                                    <div class="col-8 col-12-medium">
                                        <h2 class="major text-start"><span>Contato</span></h2>

                                        <section>
                                            <ul class="contact">
                                                <li><a class="icon brands fa-facebook-f" href="#"><span class="label">Facebook</span></a></li>
                                                <li><a class="icon brands fa-twitter" href="#"><span class="label">Twitter</span></a></li>
                                                <li><a class="icon brands fa-instagram" href="#"><span class="label">Instagram</span></a></li>
                                                <li><a class="icon brands fa-youtube" href="#"><span class="label">Youtube</span></a></li>
                                                <li><a class="icon brands fa-linkedin-in" href="#"><span class="label">LinkedIn</span></a></li>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </section>

						</div>

						<!-- Copyright -->
							<div id="copyright">
								<ul class="menu">
									<li>&copy; StarEscola. Todos os direitos reservados</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
								</ul>
							</div>

					</div>
				</footer>

		</div>

	</body>
    <!-- Scripts -->
</html>
