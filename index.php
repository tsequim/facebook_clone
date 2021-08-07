<!DOCTYPE html>
<html>
<head>
	<title>Login Facebook</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>facebook</h2>
			</div><!--logo-->

			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone:</p>
					<input type="email">
				</div><!--form-element-->
				<div class="form-element">
					<p>Senha:</p>
					<input type="password">
				</div><!--form-element-->
				<div class="form-element">
					<input type="submit" name="acao" value="Enviar">
				</div><!--form-element-->
			</form><!--form-login-->
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="images/img1.png"/>
			</div><!--img-pessoas-->

			<div class="abrir-conta">
				
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será!</h3>

				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text">
					</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text">
					</div><!--w50-->

					<div class="w100">	
						<input placeholder="E-mail" type="email">
					</div><!--w100-->

					<div class="w100">	
						<input placeholder="Senha" type="password">
					</div><!--w100-->

					<div class="w100">
						<h2>Data de Nascimento:</h2>
						<div class="data-nascimento">
						<select name="nascimento-dia" class="nascimento">
							<?php
								for($i = 1; $i <= 31; $i++){
							?>								
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<select name="nascimento-mes" class="nascimento">
							<option value="1">Janeiro</option>
							<option value="2">Fevereiro</option>
							<option value="3">Março</option>
							<option value="4">Abril</option>
							<option value="5">Maio</option>
							<option value="6">Junho</option>
							<option value="7">Junho</option>
							<option value="8">Agosto</option>
							<option value="9">Setembro</option>
							<option value="10">Outubro</option>
							<option value="11">Novembro</option>
							<option value="12">Dezembro</option>
						</select>
						<select name="nascimento-ano" class="nascimento">
							<?php
								for($i = 1960; $i <= 2021; $i++){
							?>								
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						</div><!--data-nascimento-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<div class="input-sexo">
						<div class="input-radio">
							<input type="radio" value="masculino" name="sexo">
							<H2>Masculino</H2>
						</div><!--radio-->
						<div class="input-radio">
							<input type="radio" value="feminino" name="sexo">
							<H2>Feminino</H2>
						</div><!--radio-->
						</div><!--input-sexo-->
						<div class="clear"></div>
					</div><!--w100 -->

					<div class="w100">
						<div class="botao">
						<input type="submit" name="acao" value="Cadastrar!">
						</div><!--botao-->
					</div><!--w100-->

					<div class="clear"></div>
				</form><!--criar-conta-->
			</div><!--abrir-conta-->

			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
		</div><!--center-->

		<div class="links">
		<div class="center">
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
		</div><!--center-->
		</div><!--links-->
	</section><!--linguas-->

</body>
</html>