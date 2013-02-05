<div id="authake">
<?php echo $this->element('gotohomepage'); ?>
<div class="mypassword form">
<?php echo $this->Form->create(null, array('url' => array('controller' => 'user', 'action'=>'lost_password')));?>
<fieldset class="mypassword">
    <?php echo $this->Form->input('loginoremail', array('label'=>__('Login or email'), 'size'=>'40'));?>
</fieldset>
<?php echo $this->Form->end(__('Request for password'))  ?>
</div>
</div>