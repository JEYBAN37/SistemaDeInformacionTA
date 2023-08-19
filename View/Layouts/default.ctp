<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

	
		//echo $this->Html->css('cake.generic');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
		echo $this->Html->css(array( 'cake.generic.css','bootstrap.min.css',  'sb-admin-2.css'));
		echo $this->Html->script(array('jquery-1.11.0', 'metisMenu.min', 'sb-admin-2', 'bootstrap.min'));
	?>

		<!-- Latest compiled and minified CSS -->
		<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Responsive</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	</head>
<body>  


<div class="contanier">	
 
<nav class="navbar" style="background-color: #3366CC;">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">
		<img src="https://m.www.gov.co/assets/logos/transversales/GOVCO.svg" alt="">
	</span>
  </div>
</nav>
	 <div >
		<div >
			<!--h1>ficha familiar</h1-->
		</div>
		<div>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<!--div>
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div-->
	
	 <!--?php echo $this->element('sql_dump'); ?-->

	
	   </div>
	  </div>
	</div>
	
</div>

</body>
</html>



