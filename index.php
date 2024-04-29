<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="author" content="Illumi Soluções Digitais LTDA">
	<meta name="description" content="Descubra como a Illumi pode impulsionar o seu negócio com soluções personalizadas de desenvolvimento de softwares. Entre em contato e levesua empresa para outro nível.">
	<meta name="keywords" content="Illumi, Desenvolvimento, Software, Tecnologia, Consultoria, Aplicativos, Websites, Inovação, Soluções Digitais, Desenvolvimento Web, Integração de Sistemas, Experiência do Usuário">

	<!--Flavicon-->
	<link rel="shortcut icon" href="assets/images/logo04.svg" type="image/x-icon">

	<!--Styles-->
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">

	<!--FontAwesome inicialization-->
	<script src="https://kit.fontawesome.com/5bf5514c29.js" crossorigin="anonymous"></script>

	<!--Slick Librarie-->
	<link rel="stylesheet" href="assets/libraries/slick-1.8.1/slick/slick.css">
	<link rel="stylesheet" href="assets/libraries/slick-1.8.1/slick/slick-theme.css">
	<title>Illumi | Desenvolvimento e Softwares</title>

</head>

<body>
	<header>
		<!--Navbar-->
		<?php include('assets/components/navbar.php'); ?>

		<!--Hidden menu-->
		<aside id="menuOculto" class="menuOculto">

			<div class="btn-fechar-caixa">
				<a href="#" class="btnFechar" onclick="fecharNav()">
					<i class="fa-solid fa-xmark"></i>
				</a>
			</div>

			<!-- Links menu -->
			<a href="#">Início</a>
			<a href="#">Soluções</a>
			<a href="#aboutUS">Sobre nós</a>
			<a href="#">Blog</a>
			<a href="#">FAQ</a>
			<a href="#workwe">Trabalhe conosco</a>
			<a href="#formulario">Contato</a>

		</aside>


		<div id="topo-desk" class="image-header">
			<div class="title">
				<h1>Transforme e ilumine suas ideias em soluções digitais.</h1>
				<span>Sua empresa, impulsionada por tecnologia.</span>
				<div class="call-to-action">
					<a href="#">Saiba mais</a>
				</div>
			</div>
		</div>


		<div class="topo-header">
			<div class="image-header">
				<div class="title">
					<h1>Transforme e ilumine suas ideias em soluções digitais.</h1>
					<span>Sua empresa, impulsionada por tecnologia.</span>
					<div class="call-to-action">
						<a href="#">Saiba mais</a>
					</div>
				</div>
			</div>
		</div>

	</header>

	<main>

		<?php include('assets/components/services.php'); ?>


		<section class="remove-paper">
			<div class="div-s">
				<h2>Tirar a sua ideia do papel <span>não</span> precisa ser difícil</h2>

				<!-- apenas para mobile e tablet copiei o código ja pronto porém coloquei mobile na class-->
				<div class="side-iage-mobile">
					<img src="assets/images/pexels-helena-lopes-1015568.jpg" alt="">
				</div>
				<p>Transformamos ideias em realidade digital. Descubra como podemos tornar sua visão em um software ou
					site impressionante.</p>
				<div class="cta">
					<a href="#">Solicite uma consultoria
						<img src="assets/images/icons/arrow-sm-right-svgrepo-com.svg" alt="">
					</a>
				</div>
			</div>

			<!-- Desktop -->
			<div class="side-iage">
				<img src="assets/images/pexels-helena-lopes-1015568.jpg" alt="">
			</div>

		</section>

		<!--
		<div id="aboutUS"></div>

		<section class="about-we">
			<div class="about-us">
				<div class="">
					<div class="title-about-us">
						<h2>Inovação Tecnológica para o seu Sucesso</h2>
					</div>
					<p> Na Illumi, nossa história é marcada por uma trajetória de sucesso e consolidação no mercado de tecnologia da informação. Fundada com o objetivo de oferecer soluções inovadoras e personalizadas, construímos uma reputação sólida baseada em nossa expertise e comprometimento com a excelência.</p>

					<p class="resume">Ao longo dos anos, desenvolvemos softwares e sistemas para empresas de todos os tamanhos, desde pequenas startups até grandes corporações. Nossa abordagem centrada no cliente nos permitiu entender e atender às necessidades únicas de cada cliente, resultando em parcerias duradouras e resultados significativos.</p>

					<p class="resume">Com uma equipe talentosa e apaixonada, estamos sempre buscando novas maneiras de impulsionar o sucesso de nossos clientes. Estamos ansiosos para continuar nossa jornada e ajudar mais empresas a alcançarem seu potencial máximo no mundo digital.</p>
				</div>
			</div>
		</section>-->

		<!--Team Component-->
		<?php include('assets/components/team.php'); ?>

		<div class="title-section-dados">
			<h2>Excelência comprovada</h2>
		</div>

		<section class="dados fade-in">
			<div class="container-dados">
				<div class="dado">
					<p id="d">+</p>
					<span>Empresas de grande e médio porte confiam</span>
				</div>

				<div class="dado">
					<p id="e"></p>
					<span title="">De nossos clientes satisfeitos</span>
				</div>

				<div class="dado">
					<p id="g"></p>
					<span title="O Net Promoter Score (NPS) é uma métrica de satisfação do cliente que mede a disposição dos clientes a recomendarem uma empresa, produto ou serviço para outras pessoas." style="cursor:help">NPS (Net Promoter Score) de 78 pontos</span>
				</div>

				<div class="dado">
					<p id="f"></p>
					<span title="Percentual da nossa receita que é voltado para Pesquisa e Desenvolvimento para melhorias de nossa atuação" style="cursor: help;">Da receita voltada para P&D</span>
				</div>

				<div class="dado">
					<p id="k">+</p>
					<span>Clientes satisfeitos nos últimos 12 meses</span>
				</div>
			</div>
		</section>

		<section class="cases">
			<div>
				<!--<h2>Casos de sucesso</h2>-->
			</div>

			<div class="">

			</div>
		</section>


		<section class="projetos">
			<div class="title-prjets">
				<h2>Nossos projetos</h2>
			</div>
			<div class="cards-proj">
				<div class="card-proj">
					<a href="" class="imagem-projeto">
						<img src="assets/images/LogoPopDraw-removebg-preview.png" alt="">
						<div class="contnet">
							<p>Pop Draw</p>
						</div>
					</a>
				</div>

				<div class="card-proj">
					<a href="#" class="imagem-projeto" target="_blank" title="Acessar o Litera">
						<img src="assets/images/Design sem nome.png" alt="">
						<div class="contnet">
							<p>Litera</p>
						</div>
					</a>
				</div>

				<div class="card-proj">
					<a href="" class="imagem-projeto">
						<img src="assets/images/gerenciamento-de-projetos-removebg-preview.png" alt="">
						<div class="contnet">
							<p>Projeto</p>
						</div>
					</a>
				</div>
			</div>
		</section>

		<section class="formulario-de-contato" id="formulario">
			<!--Form contact-->
			<div class="form-contact">
				<form action="configs/sendMail.php" method="post">
					<div class="title-form">
						<h3>Ainda não é nosso cliente?</h3>
						<p>Solicite mais informações</p>
					</div>

					<div class="inputs">
						<div class="item-form">
							<label for="">Você já é nosso cliente?</label>
							<select name="NossoCliente" id="" title="Nosso cliente?">
								<option value=""></option>
								<option value="não">Não</option>
								<option value="sim">Sim</option>
							</select>
						</div>

						<div class="item-form">
							<label for="nome">Nome</label>
							<input type="text" name="nomeCliente" id="nome">
						</div>

						<div class="item-form">
							<label for="empresa">Nome da empresa</label>
							<input type="text" name="nomeEmpresa" id="empresa">
						</div>

						<div class="item-form">
							<label for="emailCliente">E-mail</label>
							<input type="email" name="emailContato" id="emailCliente">
						</div>

						<div class="item-form">
							<label for="contato">Telefone</label>
							<input type="tel" name="telefoneContato" id="contato">
						</div>

						<div class="item-form">
							<label for="interesse">Qual serviço você deseja informações?</label>
							<select name="servicoInteresse" id="interesse">
								<option value="Selecionar"></option>
								<?php
								$opcoes = [
									"Softwares",
									"Sites",
									"Aplicativos Móveis",
									"Integrações de Sistemas",
									"Consultoria em Tecnologia",
									"E-Commerce",
									"Sistemas de Gerenciamento",
									"Desenvolvimento de Jogos"
								];

								foreach ($opcoes as $opcao) {
									echo '<option value="' . $opcao . '">' . $opcao . '</option>';
								}
								?>
							</select>

						</div>

						<div class="item-form inverse">
							<label for="termos">Ao clicar no botão de enviar, concordo com os
								<a href="#">Termos</a>
							</label>
							<input type="checkbox" name="concordaTermo" id="termos">
						</div>

						<?php if (isset($_GET['error']) && $_GET['error'] == 1) : ?>
							<p id="error">Preencha todos os campos!</p><br>
						<?php elseif (isset($_GET['error']) && $_GET['error'] == 2) : ?>
							<p id="error">Erro ao enviar o formulário</p><br>
						<?php endif ?>

						<div class="btn-submit">
							<button type="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</section>
	</main>

	<section class="oportunities" id="workwe">
		<div class="image-programmer"></div>

		<div class="content-pro">
			<div class="">
				<h2>Siga a carreira de tecnologia com a Illumi.</h2>
			</div>

			<div class="">
				<p>A Illumi oferece diversas oportunidades para profissionais da área de tecnologia da informação que desejam fazer parte de uma equipe dinâmica e inovadora. Se você é apaixonado por tecnologia e busca constantemente por desafios, aqui é o seu lugar!</p>
				<br>
				<p>Na Illumi, valorizamos o talento e a criatividade de nossos colaboradores, proporcionando um ambiente de trabalho colaborativo e estimulante. Com projetos variados e clientes de diversos segmentos, você terá a oportunidade de desenvolver suas habilidades e crescer profissionalmente.</p>
				<br>

				<div class="carreiara">
					<a href="">Saiba mais
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer component-->
	<?php include('assets/components/footer.php'); ?>

	<!--WhatsApp button-->
	<div class="whatsapp-icon circle pulse">
		<a href="https://wa.me/5511957467475" target="_blank" rel="noreferrer noopener" title="WhatsApp">
			<img src="assets/images/icons/whatsapp1.png" alt="WhatsApp">
		</a>
	</div>

	<!-- JavaScripts -->
	<script type="text/javascript" src="assets/javascript/navbar.js"></script>
	<script type="text/javascript" src="assets/javascript/menu.js"></script>

	<!--JQuery-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!--Slick-->
	<script type="text/javascript" src="assets/libraries/slick-1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="assets/javascript/carousel.js"></script>

	<!--Fade-in effect-->
	<script type="text/javascript" src="assets/javascript/fade-in.js"></script>
</body>

</html>