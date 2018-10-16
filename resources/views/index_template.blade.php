<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Job Pro" />
	<meta name="keywords" content="Job Pro" />
	<meta name="author" content="" />
	<meta name="MobileOptimized" content="320" />
	<!--srart theme style -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/fonts.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/reset.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/owl.carousel.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/owl.theme.default.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/flaticon.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive.css')}}" />
	
	@yield('header')

	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="{{URL::asset('images/header/favicon.ico')}}" />

	<title>@yield('titulo')</title>
</head>
<body>
	<div>
		@yield('cabecalho')

		<div id="preloader">
			<div id="status">
				<img src="{{URL::asset('images/header/loadinganimation.gif')}}" id="preloader_image" alt="loader">
			</div>
		</div>
		<!-- Top Scroll End -->
		<!-- Header Wrapper Start -->
		<div class="jp_top_header_img_wrapper">
			<div class="jp_slide_img_overlay"></div>
			<div class="gc_main_menu_wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
							<div class="gc_header_wrapper">
								<div class="gc_logo">
									<a href="index"><img src="{{URL::asset('images/header/logo.png')}}" alt="Logo" title="Job Pro" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center_responsive">
							<div class="header-area hidden-menu-bar stick" id="sticker">
								<!-- mainmenu start -->
								<div class="mainmenu">
									<div class="gc_right_menu">
										<ul>
											<li id="search_button">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g><path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#23c0e9"/></g></svg>
											</li>
											<li>
												<div id="search_open" class="gc_search_box">
													<input type="text" placeholder="Search here">
													<button><i class="fa fa-search" aria-hidden="true"></i></button>
												</div>
											</li>
										</ul>
									</div>
									<ul class="float_left">
										<li class="has-mega gc_main_navigation"><a href="index" class="gc_main_navigation">  Início&nbsp;</a>
											
										</li>
										<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Trabalho&nbsp;<i class="fa fa-angle-down"></i></a>
											<!-- mega menu start -->
											<ul>
												<li class="parent"><a href="listing_left">Listagem-esquerda</a></li>
												<li class="parent"><a href="listing_right">Listagem-Right</a></li>
												<li class="parent"><a href="listing_single">Listagem única</a></li>

											</ul>
										</li>
										<li class="parent gc_main_navigation"><a href="#" class="gc_main_navigation">Candidatos &nbsp;<i class="fa fa-angle-down"></i></a>
											<!-- sub menu start -->
											<ul>
												<li class="parent"><a href="company_listing">Listagem de empresas</a></li>
												<li class="parent"><a href="company_listing_single">Empresa Individual</a></li>
												<li class="parent"><a href="candidate_listing">Listagem de candidatos</a></li>
												<li class="parent"><a href="candidate_profile">Perfil do candidato</a></li>

											</ul>
											<!-- sub menu end -->
										</li>
										<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Páginas&nbsp;<i class="fa fa-angle-down"></i></a>
											<!-- mega menu start -->
											<ul>
												<li class="parent"><a href="about">Sobre nós</a></li>
												<li class="parent"><a href="404 error">404</a></li>
												<li class="parent"><a href="add_postin">Adicionar postagem</a></li>
												<li class="parent"><a href="login">Entrar</a></li>
												<li class="parent"><a href="register">Registo</a></li>
												<li class="parent"><a href="pricing">Preços</a></li>
											</ul>
										</li>
										<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Blog&nbsp;<i class="fa fa-angle-down"></i></a>
											<!-- mega menu start -->
											<ul>
												<li class="parent"><a href="blog_left">Blog esquerda</a></li>
												<li class="parent"><a href="blog_right">Blog direito</a></li>
												<li class="parent"><a href="blog_single_left">Blog Single Left</a></li>
												<li class="parent"><a href="blog_single_right">Blog único direito</a></li>

											</ul>
										</li>
										<li class="gc_main_navigation parent"><a href="contact" class="gc_main_navigation">Contato</a></li>
									</ul>
								</div>
								<!-- mainmenu end -->
								<!-- mobile menu area start -->
								<header class="mobail_menu">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-6 col-sm-6">
												<div class="gc_logo">
													<a href="index"><img src="{{URL::asset('images/header/logo.png')}}" alt="Logo" title="Grace Church"></a>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6">
												<div class="cd-dropdown-wrapper">
													<a class="house_toggle" href="#0">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#ffffff"/></g></g></svg>
													</a>
													<nav class="cd-dropdown">
														<h2><a href="#">Job<span>Pro</span></a></h2>
														<a href="#0" class="cd-close">Close</a>
														<ul class="cd-dropdown-content">
															<li>
																<form class="cd-search">
																	<input type="search" placeholder="Search...">
																</form>
															</li>
															<li class="has-children">
																<a href="index">Inicio</a>
															</li>
															<!-- .has-children -->


															<li class="has-children">
																<a href="#">Trabalho</a>

																<ul class="cd-secondary-dropdown is-hidden">
																	<li class="go-back"><a href="#0">Menu</a></li>
																	<li>
																		<a href="listing_left">Listagem Esquerda</a>
																	</li>
																	<!-- .has-children -->

																	<li>
																		<a href="listing_right">Listagem Direita</a>
																	</li>
																	<!-- .has-children -->

																	<li>
																		<a href="listing_single">Listagem Única</a>
																	</li>
																	<!-- .has-children -->


																</ul>
																<!-- .cd-secondary-dropdown -->
															</li>
															<!-- .has-children -->
															<li class="has-children">
																<a href="#">Candidatos</a>

																<ul class="cd-secondary-dropdown is-hidden">
																	<li class="go-back"><a href="#0">Menu</a></li>
																	<li><a href="company_listing">Listagem de Empresas</a></li>
																	<li><a href="company_listing_single">Empresa Individual</a></li>
																	<li><a href="candidate_listing">Listagem de Candidatos</a></li>
																	<li><a href="candidate_profile">Perfil do Candidato</a></li>
																	<!-- .has-children -->

																</ul>
																<!-- .cd-secondary-dropdown -->
															</li>
															<!-- .has-children -->
															<li class="has-children">
																<a href="#">Páginas</a>

																<ul class="cd-secondary-dropdown is-hidden">
																	<li class="go-back"><a href="#0">Principal</a></li>
																	<li><a href="about">Sobre nós</a></li>
																	<li><a href="404error">404</a></li>
																	<li><a href="add_postin">Adicionar Postagem</a></li>
																	<li><a href="login">Entrar</a></li>
																	<li><a href="register">Registo</a></li>
																	<li><a href="pricing">Preços</a></li>
																	<!-- .has-children -->

																</ul>
																<!-- .cd-secondary-dropdown -->
															</li>
															<li class="has-children">
																<a href="#">Blog</a>

																<ul class="cd-secondary-dropdown is-hidden">
																	<li class="go-back"><a href="#0">Principal</a></li>
																	<li>
																		<a href="blog_left">Blog-Esquerda</a>
																	</li>
																	<!-- .has-children -->

																	<li>
																		<a href="blog_right">Blog-Direita</a>
																	</li>
																	<!-- .has-children -->

																	<li>
																		<a href="blog_single_left">Blog-Único-Esquerdo</a>
																	</li>
																	<!-- .has-children -->

																	<li>
																		<a href="blog_single_right">Blog-Único-Direito</a>
																	</li>
																	<!-- .has-children -->

																</ul>
																<!-- .cd-secondary-dropdown -->
															</li>
															<!-- .has-children -->
															<!-- .has-children -->
															<li>
																<a href="contact">Contato</a>
															</li>

														</ul>
														<!-- .cd-dropdown-content -->



													</nav>
													<!-- .cd-dropdown -->

												</div>
											</div>
										</div>
									</div>
									<!-- .cd-dropdown-wrapper -->
								</header>
							</div>
						</div>
						<!-- mobile menu area end -->
						<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
							<div class="jp_navi_right_btn_wrapper">
								<ul>
									<li><a href="register"><i class="fa fa-user"></i>&nbsp; CADASTRAR</a></li>
									<li><a href="login"><i class="fa fa-sign-in"></i>&nbsp; ENTRAR</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- TESTE -->
			
			@yield('pesquisar')

			<!-- TESTE -->
		</div>	
	</div>



	<!-- jp counter Wrapper Start -->
	

	<div>
		@yield('conteudo')
	</div>

	<div class="container">
		@yield('rodape')

		<div class="jp_footer_main_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="jp_footer_logo_wrapper">
							<div class="jp_footer_logo">
								<a href="#"><img src="{{URL::asset('images/content/resume_logo.png')}}" alt="footer_logo"/></a>
							</div>
						</div>
					</div>
					<div class="jp_footer_three_sec_main_wrapper">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="jp_footer_first_cont_wrapper">
								<div class="jp_footer_first_cont">
									<h2>Quem nós somos</h2>
									<p>Esta é a versão do Photoshop do Lom Ipsum. Você pode usar o aliquet de áudio. Sollicitudin Aenean, lorem quis bibendum.<br><br> Aumente o aliquet. Sollicitudin Aenean,</p>
									<ul>
										<li><i class="fa fa-plus-circle"></i> <a href="#">CONSULTE MAIS INFORMAÇÃO</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper2">
								<div class="jp_footer_candidate">
									<h2>Para candidato</h2>
									<ul>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Adicionar um currículo</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Painel de candidatos</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Aplicações passadas</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Alertas de emprego</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Favoritos</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Minha conta</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Seus empregos</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">
								<div class="jp_footer_candidate">
									<h2>Para empregadores</h2>
									<ul>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Procurar candidatos</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Painel do empregador</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Adicionar trabalho</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Página de emprego</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Pacotes de trabalho</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Processo de trabalho</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Minha conta</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">
								<div class="jp_footer_candidate">
									<h2>Em formação</h2>
									<ul>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Sobre nós</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Termos e Condições</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Política de Privacidade</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Carreiras conosco</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Mapa do site</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Contate-Nos</a></li>
										<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="jp_bottom_footer_Wrapper">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="jp_bottom_footer_left_cont">
										<p>© 2017-18 Job Pro. All Rights Reserved.</p>
									</div>
									<div class="jp_bottom_top_scrollbar_wrapper">
										<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="jp_bottom_footer_right_cont">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
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


	<!-- AQUI VAO OS SCRIPTS -->
	<script src="{{URL::asset('js/jquery_min.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.js')}}"></script>
	<script src="{{URL::asset('js/jquery.menu-aim.js')}}"></script>
	<script src="{{URL::asset('js/jquery.countTo.js')}}"></script>
	<script src="{{URL::asset('js/jquery.inview.min.js')}}"></script>
	<script src="{{URL::asset('js/owl.carousel.js')}}"></script>
	<script src="{{URL::asset('js/modernizr.js')}}"></script>
	<script src="{{URL::asset('js/custom.js')}}"></script>
	<script src="{{URL::asset('js/jquery.mask.min.js')}}"></script>
	<script src="{{URL::asset('js/utils.js')}}"></script>
	@yield('rodape')
	<!-- 
	<script src="{{URL::asset('js/jquery.magnific-popup.js')}}"></script>
	<script src="{{URL::asset('js/custom_II.js')}}"></script> 
-->

</body>
</html>