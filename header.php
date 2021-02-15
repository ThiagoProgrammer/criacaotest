<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TesteAhreas
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
	<meta charset="<?php bloginfo('charset'); ?>">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'testeahreas'); ?></a>
		<div class="background1 ">
			<div class=" container">

				<div class="nav navbar row">

					<div class="logo-nav col-md-6 d-flex"> <img src="<?php echo get_template_directory_uri(); ?> /home/img/logo02.png" width="25%" height="25%" alt="" />
					</div>

					<div class=" navbar-links col-md-6 d-flex justify-content-end align-items-end ">
						<a href="#" class="p-4 "> Sobre </a>
						<a href="#recursos" class="p-4 "> Recursos </a>
						<a href="#faq" class="p-4 "> Faq </a>
						<a href="#sabermais" type="button" class="btn1 btn btn-outline-light ml-2 pl-4 pr-4 text-white "> Saber mais </a>


					</div>

				</div>


				<div class="row ">
					<div data-aos="fade-right" data-aos-duration="1000" class="  col-md-6 ">
						<h1 class="titulo1">O Melhor App <br> para seu<br> Condomínio</h1>
						<h6 class="letra"> Não fique fora dessa, confira abaixo como funciona <br>
							esse app que está revolucionando o mercado.</h6><br>
						<div class="btnmeio"> <a href="#sabermais" type="button" class="btn2 btn-light ml-3 pl-4 pr-4 pt-2 pb-2"><b> Saber mais </b></a> </div>

					</div>
					<div data-aos="fade-down" data-aos-duration="1000" class=" col-md-6">
						<img class="celular" src=" <?php echo get_template_directory_uri(); ?> /home/img/BG.png" alt="" />
						<img class="cel-mob" src=" <?php echo get_template_directory_uri(); ?> /home/img/CelMob.png" alt="" />

					</div>

				</div>

			</div>



		</div>