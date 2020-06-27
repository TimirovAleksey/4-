<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 		<title>php</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>

	<body>
<header>
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
  				<a class="navbar-brand" href="/index.inc.php"><img width="70px" height="70px" src="img/mem.jpg"></a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>

  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul class="navbar-nav ml-auto">
<li><a href='index.php'>Домой</a></li>
<li><a href='index.php?id=contact'>Контакты</a></li>
<li><a href='index.php?id=about'>Стоимости услуг</a></li>
<li><a href='index.php?id=gbook'>Гостевая книга</a></li>
<li class="nav-item"><a class="nav-link" href="https://vk.com/sola_design"><img src="img/vk.png" width="35px" height="35px"></a></li>
      					<li class="nav-item"><a class="nav-link" href="https://www.instagram.com/sola.art.simf/"><img width="35px" height="35px" src="img/inst.png"></a></li>
</ul>
</div>
</div>
<div class="col-lg-12" >
</ul>
  				</div>
				</nav>
			</div>	
		</header>
<?php
	include 'routing.php';
 ?>
<!--Конец Области контента-->

	</body>
</html>