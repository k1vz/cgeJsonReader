<!--
 !	@authors Alexandre Costa Belettini
 ! 		 	 Pedro Otávio Furtado Duarte
 !
 !	@class 2º ano A
 !	@TCC: CGE (Calibração de Gnômon Eletrônico)
 -->

<!DOCTYPE html>
<html lang="EN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hub de Links</title>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">

		<!-- Header to help identification -->
		<header>
			<h1>CGE - Calibrador de Gnômon Eletrônico</h1>
			<h4>Hub de Links</h4>
			<br/>
		</header>

		<!-- Buttons who will directonate the user -->
		<div id="buttons">
			<button id="btn-cadastro" class="btn btn-primary">
				<a href="cadastro-gnomon.php" class="hiperlimk">Cadastro de novo gnômon.</a>
			</button><br>

			<button id="btn-gnomon-real" class="btn btn-primary">
				<a href="gnomon-real.php" class="hiperlimk">Dados do gnômon real.</a>
			</button><br>

			<button id="btn-gnomon-virtual" class="btn btn-primary">
				<a href="gnomon-virtual.php" class="hiperlimk">Dados do gnômon virtual.</a>
			</button><br>
		</div>

	</div>
</body>
</html>