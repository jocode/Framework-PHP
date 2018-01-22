<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php if (isset($this->titulo)) echo $this->titulo; ?></title>
	<script type="text/javascript" src="<?php echo BASE_URL . 'public/js/jquery.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo BASE_URL . 'public/js/jquery.validate.min.js'; ?>"></script>
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
		<!-- En este contenedor vamos a mostrar los errores-->
		<div id="content">
			<noscript><p>Para el correcto funcionamiento debe tener el soporte de Javascript habilitado</p></noscript>
			<?php if (isset($this->_error)) echo $this->_error; ?>
		</div>
