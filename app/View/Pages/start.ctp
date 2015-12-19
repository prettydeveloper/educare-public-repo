<div class="hero-unit">
	<h1><?php echo __('Welcome'); ?></h1>
	<p>Questa è la home page</p>
	<p><a class="btn btn-primary btn-large" href="./attendances/selectSchool">
		<i class="icon-calendar icon-white"></i><?php echo __('Take attendances') ?> &raquo;
	</a></p>
</div><!--/hero-->
<div class="row-fluid">
	<div class="span4">
		<h2><?php echo __('Schools'); ?></h2>
		<a class="btn" href="<?php echo $this->webroot ?>/schools/add">
			<i class="icon-plus"></i> <?php echo __('Add School'); ?>
		</a>
	</div><!--/span-->
	<div class="span4">
		<h2><?php echo __('Students'); ?></h2>
			<a class="btn" href="<?php echo $this->webroot ?>/students/add">
				<i class="icon-plus"></i> <?php echo __('Add Student'); ?>
			</a>
	</div><!--/span-->
	<div class="span4">
		<h2><?php echo __('Grades'); ?></h2>
		<a class="btn" href="<?php echo $this->webroot ?>/grades/add">
			<i class="icon-plus"></i> <?php echo __('Add Grade'); ?>
		</a>
	</div><!--/span-->
</div><!--/row-->



