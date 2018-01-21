<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php if (isset($this->titulo)) echo $this->titulo; ?></title>
</head>
<body>
	<div id="main">
		<div id="header">
			<h1><?php echo APP_NAME; ?></h1>
		</div>

		<div id="menu_top">
			<ul>
				<?php if (isset($_layoutParams['menu'])): ?>
					<?php for ($i = 0; $i < count($_layoutParams['menu']); $i++): ?>
						<li><a href="<?php echo $_layoutParams['menu'][$i]['enlace']; ?>"><?php echo $_layoutParams['menu'][$i]['titulo']; ?></a></li>
					<?php endfor; ?>
				<?php endif; ?>
			</ul>
		</div>
