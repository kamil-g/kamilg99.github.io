<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title> Logowanie </title>
	<link rel="stylesheet" type="text/css"	href="style.css">
	</style>
</head>
<body>
	<div id="body">
		<div id="menu">
				<div class="kom">
					<h1><a href="index.html">Strona Główna</a></h1>
				</div>
				
				<div class="kom2">
					<h1>
						<ol>
							<li> Menu <br>
								<ul>
									<li><a href="https://www.youtube.com/">Youtube</a></li>
									<li><a href="https://pl.wikipedia.org/wiki/Wikipedia:Strona_g%C5%82%C3%B3wna">Wikipedia</a></li>
									<li><a href="https://fortnitepolska.pl/">Fortnite</a></li>
								</ul>
							</li>			
						</ol>
					</h1>
				</div>
				
				<div class="komx">
				<a href="https://twitch.tv/bandytatv"><img src="bandytatv.jpg" height="100%"></a>
				</div>
				
				<div class="kom">		
					<h1><a href="php.php">PHP</a></h1>
				</div>
				
				<div class="kom">
					<h1><a href="info.html">Informacje</a></h1>
				</div>
			
		</div>
	<div id="placeholder"></div>
	<div id="main">
		<?php
			
			echo $_POST["login"];
	
		?>

	</div>
	
	<div id="bottombar">
		<h2> V.1.9.10.2018 </h2>
	</div>

	</div>	
</body>
</html>
