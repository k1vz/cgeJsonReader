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
	<title>Cadastro - Novo Gnômon</title>

	<link rel="stylesheet" href="style-cadastro.css">
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
			<h4>Cadastro de novo Gnômon</h4>
			<br/>
		</header>

		<form method="post" action="" id="formul"> <!--action = saida do submit-->

			<div class="justify-content-start d-flex row">
				<div class="col-3">
					<label for="name" class="left-side-org"><b>Proprietário</b></label>
					<!--só letra-->
					<label for="pswd" class="left-side-org"><b>Senha:</b></label>
					<!--só número-->
					<label for="lat" class="double-line-org left-side-org"><b>Latitude:</b><br>
						<p>8 dígitos</p></label> <!--só número-->
					<label for="long" class="double-line-org left-side-org"><b>Lontitude:</b><br>
						<p>8 dígitos</p></label> <!--só número-->
					<label for="json-preexistent" class="left-side-org"><b>JSON Pré-existente:</b></label>
					<!--só número-->
				</div>

				<div class="col-6">
					<input id="name" name="name" type="text" class="right-side-org" placeholder="Ernesto">
					<input id="pswd" name="pswd" type="password" class="right-side-org" placeholder="123senha">
					<input id="lat" type="number" name="lat" class="right-side-org" min="0" max="100000000" placeholder="12345678">
					<input id="long" type="number" name="long" class="right-side-org" min="0" max="100000000" placeholder="12345678">
					<input id="json-preexistent" name="json-preexistent" type="file" class="right-side-org">
				</div>
			</div>	

			<div id="buttons">
				<input type="submit" id="btn-submit" class="btn btn-primary col-2" onClick="check(self)">
			</div>

			<script>
				window.check = function(self) {
					if (self.term_accept.checked == false) {
						alert("Por favor, aceite os termos.");
					}
					else {
						$("#formul").submit();
					}
				}
			</script>

		</form>

		<div id="alerts">
			<!--
			<script>

				// Check if the user entered correctly values.
				window.check = function(self) {

					// refresh pq ainda estamos estudando um jeito dele n dar submit
					if (!(self.lat.value.length == 8)) {
						alert("Por favor, digite 8 dígitos no campo Latitude.");
						location.refresh();
					}

					if (!(self.long.value.length == 8)) {
						alert("Por favor, digite 8 dígitos no campo Lontitude.");
						location.refresh();
					}

					if (self.term_accept.checked == false) {
						alert("Por favor, aceite os termos.");
						location.refresh();
					}
				}

			</script>
		-->
		</div>
		
	</div>

</body>
</html>