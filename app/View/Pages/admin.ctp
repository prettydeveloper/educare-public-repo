<div class="hero-unit">
	<h1><?php echo __('Welcome'); ?></h1>
	<p>Area amministrativa</p>
	<p><a class="btn btn-primary btn-large" href="<?php echo $this->webroot ?>/events/add">
		<i class="icon-calendar icon-white"></i>Nuovo evento &raquo;
	</a></p>
</div><!--/hero-->
<div class="row-fluid">
	<div class="span4">
		<h2><?php echo __('Employees'); ?></h2>
		<a class="btn" href="<?php echo $this->webroot ?>/employees">
			<i class="icon-chevron-right"></i> <?php echo __('Manage employees'); ?>
		</a>
	</div><!--/span-->
	<div class="span4">
		<h2><?php echo __('Meetings'); ?></h2>
			<a class="btn" href="<?php echo $this->webroot ?>/meetings">
				<i class="icon-chevron-right"></i> <?php echo __('Manage meetings'); ?>
			</a>
	</div><!--/span-->
	<div class="span4">
		<h2><?php echo __('Laboratories'); ?></h2>
		<a class="btn" href="<?php echo $this->webroot ?>/laboratories">
			<i class="icon-chevron-right"></i> <?php echo __('Manage laboratories'); ?>
		</a>
	</div><!--/span-->
</div><!--/row-->



