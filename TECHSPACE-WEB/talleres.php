<?php include 'header.php';  ?>
<?php include 'menu.php';  ?>
<?php include 'head-banner.php' ?>



<!-- breadcrumb -->
<div class="breadcrumb-w3pvt bg-light">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Inicio</a>
				</li>
				<li class="breadcrumb-item" aria-current="page">Talleres</li>
			</ol>
		</nav>
	</div>
</div>
<!-- //breadcrumb -->
<section class="blog pt-5">
	<div class="container py-md-3">
		<h2 class="heading mb-sm-5 mb-4">Nuestros<strong> Talleres </strong></h2>
		<div class="row">
			<div class="col-lg-6 news-left mb-5">
				<div class="row">
					<div class="col-md-3 w3-w3pvt-news-date text-right mb-md-0 mb-2">
						<div class="w3pvt-news-icon">
							<button type="button" class="btn btn-success"><span style="color:#ffff;"
									class="fa fa-calendar" aria-hidden="true"></span> 16 de Julio</button>
						</div>
						<div class="w3pvt-news-icon mt-md-4">
							<button type="button" class="btn btn-outline-success" data-toggle="modal"
								data-target="#form-ins_modal1">
								<span class="fa fa-edit"></span> Inscríbete</button>
						</div>
					</div>
					<div class="col-md-9 w3-w3pvt-news-img">
						<a href="single.html"><img src="images/t1.jpg" alt=""></a>
						<h4 class="my-sm-3 mt-3 mb-1">Aplicaciones Web con Java y Spring Boot</h4>
						<p>Desarrolla una aplicación completa CRUD con Spring Boot + MVC + Data JPA y Thymeleaf</p>
					</div>
				</div>
			</div>
			<!--<div class="col-lg-6 news-left mb-5">
				<div class="row">
					<div class="col-md-3 w3-w3pvt-news-date text-right mb-md-0 mb-2">
						<div class="w3pvt-news-icon">
							<button type="button" class="btn btn-primary"><span style="color:#ffff;"
									class="fa fa-calendar" aria-hidden="true"></span> Próximo</button>
						</div>
						<div class="w3pvt-news-icon mt-md-4">
							<button type="button" class="btn btn-outline-primary" data-toggle="modal"
								data-target="#form-ins_modal">
								<span class="fa fa-edit"></span> Inscríbete</button>
						</div>
					</div>
					<div class="col-md-9 w3-w3pvt-news-img">
						<a href="single.html"><img src="images/t2.jpg" alt=""></a>
						<h4 class="my-sm-3 mt-3 mb-1">Taller de Administración de Servidores Linux</h4>
						<p>Instalación y configuración de Sistema Operativo, identificacion de Características y
							realización de tareas administrativas.</p>
					</div>
				</div>
			</div>-->
			<div class="col-lg-6 news-left mb-5">
					<div class="row">
						<div class="col-md-3 w3-w3pvt-news-date text-right mb-md-0 mb-2">
							<div class="w3pvt-news-icon">
								<button type="button" class="btn btn-danger"><span style="color:#ffff;"
										class="fa fa-calendar" aria-hidden="true"></span> 17 de Julio</button>
							</div>
							<div class="w3pvt-news-icon mt-md-4">
								<button type="button" class="btn btn-outline-danger" data-toggle="modal"
									data-target="#form-ins_modal2">
									<span class="fa fa-edit"></span> Inscríbete</button>
							</div>
						</div>
						<div class="col-md-9 w3-w3pvt-news-img">
							<a href="single.html"><img src="images/t3.jpg" alt=""></a>
							<h4 class="my-sm-3 mt-3 mb-1">Taller de Oracle 11g</h4>
							<p></p>
						</div>
					</div>
				</div>
			<div class="col-lg-6 news-left mb-5">
				<div class="row">
					<div class="col-md-3 w3-w3pvt-news-date text-right mb-md-0 mb-2">
						<div class="w3pvt-news-icon">
							<button type="button" class="btn btn-primary"><span style="color:#ffff;"
									class="fa fa-calendar" aria-hidden="true"></span> Próximo</button>
						</div>
						<div class="w3pvt-news-icon mt-md-4">
							<button type="button" class="btn btn-outline-primary" data-toggle="modal"
								data-target="#ModalProximo">
								<span class="fa fa-edit"></span> Inscríbete</button>
						</div>
					</div>
					<div class="col-md-9 w3-w3pvt-news-img">
						<a href="single.html"><img src="images/t4.jpg" alt=""></a>
						<h4 class="my-sm-3 mt-3 mb-1">Taller gratuito de integración continua - DEVOPS</h4>
						<p>Descubra cómo empezar con DevOps: cree la cultura adecuada, identifique los retos y encuentre los cuellos de botella de entrega</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 news-left mb-5">
				<div class="row">
					<div class="col-md-3 w3-w3pvt-news-date text-right mb-md-0 mb-2">
						<div class="w3pvt-news-icon">
							<button type="button" class="btn btn-primary"><span style="color:#ffff;"
									class="fa fa-calendar" aria-hidden="true"></span> Próximo</button>
						</div>
						<div class="w3pvt-news-icon mt-md-4">
							<button type="button" class="btn btn-outline-primary" data-toggle="modal"
								data-target="#ModalProximo">
								<span class="fa fa-edit"></span> Inscríbete</button>
						</div>
					</div>
					<div class="col-md-9 w3-w3pvt-news-img">
						<a href="single.html"><img src="images/t5.jpg" alt=""></a>
						<h4 class="my-sm-3 mt-3 mb-1">Aplicaciones Web con Node JS y VueJS</h4>
						<p>Desarrolla una aplicación completa CRUD con una api Rest en NodeJs consumiendo con VueJS</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Single -->
<?php include 'form_ins_modal.php' ?>
<?php include 'footer.php' ?>