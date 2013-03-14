<?php
/**
 *
 * PHP 5
 *
 * @copyright     Copyright 2012, Lucia Moreno (http://prettydeveloper.com)
 * @link          http://prettydeveloper.com PrettyDeveloper
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'EduCare');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this->Html->charset(); ?>
		<!-- meta tag for responsive layout -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			echo $this->Html->meta('viewport', array('width' => 'device-width' , 'initial-scale' => '1.0'));

			echo $this->Html->css('cake.custom');
			echo $this->Html->css('bootstrap');
			echo $this->Html->css('bootstrap-responsive');

			echo $this->Html->script('jquery-1.9.1');
			echo $this->Html->script('bootstrap');

			// Datepicker for Bootstrap
			echo $this->Html->css('datepicker');
			echo $this->Html->script('bootstrap-datepicker');
			echo $this->Html->script('locales/bootstrap-datepicker.it');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>

		<!-- Le fav and touch icons -->
	    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

	</head>
	<body>
		<!-- TOPBAR -->
		<?php echo $this->element('topbar', array('title' => $cakeDescription)); ?>
		<!-- /TOPBAR -->
		<div class="container-fluid">
			<!-- FLASH MESSAGES -->
			<?php echo $this->Session->flash(); ?>
			<div class="row-fluid">
				<!-- SIDEBAR -->
				<!--?php echo $this->element('sidebar', array('title' => $cakeDescription)); ?-->
				<!-- /SIDEBAR -->
				<!-- MAIN CONTENT -->
				<div class="span12">
					<?php echo $this->fetch('content'); ?>
				</div><!--/span9-->
				<!-- /MAIN CONTENT -->
			</div><!--/row-->
			<hr>
			<footer>
				<?php echo $this->Html->link(
						$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
						'http://www.cakephp.org/',
						array('target' => '_blank', 'escape' => false)
					);
				?>
			</footer>
		</div><!--/.fluid-container-->
		<?php echo $this->element('sql_dump'); ?>

	</body>
</html>
