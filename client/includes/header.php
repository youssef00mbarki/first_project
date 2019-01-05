<?php
$baseUrl = 'http://localhost/project/client/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device=with">
	<meta name="description" content="AFFordable and professional web design">
	<meta name="Keywords content web design, web design,professional">
	<meta name="author" content="Youssef Mbarki">
	<title>Acme Web Design | Welcome</title>
	<link rel="stylesheet" type="text/css" href="<?=$baseUrl;?>assets/css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">Acme</span> Web design</h1>
			</div>
            <?php include 'menu.php'; ?>
		</div>
	</header>