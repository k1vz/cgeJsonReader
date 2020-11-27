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
	<title>Dados do Gnômon Real</title>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container" id="using-pre">

		<!-- Header to help identification -->
		<header>
			<h1>CGE - Calibrador de Gnômon Eletrônico</h1>
			<h4>Dados do Gnômon Real</h4>
			<br/>
		</header>

		<!-- Content - Print of data from JSON -->
		<div>
			<pre class="print-json">

				<?php
					$reads = json_decode(file_get_contents("data_real.json"))->reads;

					foreach ($reads as $read) {
						/* Print the content, without arrays */
						echo "<br>ID: $read->id; <br>Data: $read->data_R; <br>Hora: $read->tempo_R <br>";

						/* Read the content of the arrays and save them in variables */
						$posi_sun = $read->PosiSol_R;
						$posi_gnomon = $read->PosiGnomon_R;

						/* Print the content from arrays */
						foreach ($posi_sun as $read) {
							echo "Posição do Sol - Gnômon Real: <br>";
							echo "   X: $read->X_R; <br>   Y: $read->Y_R <br>   Z: $read->Z_R <br>";
						}

						foreach ($posi_gnomon as $read) {
							echo "Posição do Gnômon Real: <br>";
							echo "   Latitude: $read->lati_R; <br>   Longitude: $read->longi_R <br>";
						}

						echo "<br>";
					}
				?>

			</pre>
		</div>
	</div>
</body>
</html>