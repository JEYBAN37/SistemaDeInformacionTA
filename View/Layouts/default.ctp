<?php

/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
$cakeDescription = __d('cake_dev', 'Aplicativo APS - Pasto');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('APS - Ficha Familia'); ?>
	</title>
	<?php
	echo $this->Html->meta('icon');


	echo $this->Html->css(array('cake.generic.css'));
	echo $this->Html->script(array('jquery-1.11.0', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min'));
	echo $this->fetch('css');
	echo $this->fetch('script');

	?>

	<!-- Latest compiled and minified CSS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Responsive</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="contanier">
		<nav class="navbar grow justify-content-center" style="background-color: #3366CC;">
			<img src="https://m.www.gov.co/assets/logos/transversales/GOVCO.svg" alt="">
		</nav>
		<div>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
			'http://www.cakephp.org/',
			array('target' => '_blank', 'escape' => false)
		);
		?>
	</div>
</body>

</html>