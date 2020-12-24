<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8"/>
	<link rel="stylesheet" href="../../../assets/css/style_page.css"/>
	<title>Bienvenue</title>
</head>
<body>
	<?php
		
		if(isset($_POST['id']))
		{
	?>
			<h1>Bienvenue <?= htmlspecialchars($_POST['id']) ?>!<br/></h1>
			<p>Est-ce bien cela votre mail ?
				<br/>
				 <?= htmlspecialchars($_POST['e-mail'])?>
			</p>
	<?php
		}
		else
		{
			echo 'Veuillez entrer correctement les données.';
		}
		
	?>
</body>
</html>