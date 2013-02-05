<div id="authake">
<?php echo $this->element('gotohomepage'); ?>
<div class="users view"><? //pr($user);?>
<h2><?php  echo __('Profile of '); echo $user['User']['login'];?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Login'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $user['User']['login']." <em>(ID {$user['User']['id']})</em>"; ?>
            &nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Groups'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php
             
            $gr = array();
            foreach($user['Group'] as $group) $gr[] = $group['name'];
            if (empty($gr))
                echo __('Guest');
            else
                echo implode(", ", $gr); ?>  
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Created'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $this->Time->format('d/m/Y', $user['User']['created']); ?>
            &nbsp;
        </dd>
    </dl>

<?php echo $this->Form->create('User', array('url' => array('controller' => 'user', 'action'=>'index')));?>
<fieldset>
        <legend><?php echo __('Modify profile');?></legend>
    <?php
        echo $this->Form->input('email', array('value'=>$user['User']['email'], 'size'=>'40', 'after'=>'<p>'.__('(If modified, you will have to confirm it before the next login)').'</p>'));
        echo $this->Form->input('password1', array('type'=>'password', 'label'=> __('New Password') , 'value' => '', 'size'=>'12'));
        echo $this->Form->input('password2', array('type'=>'password',  'label'=> __('Enter Your New Password Again'), 'value' => '', 'size'=>'12'));
    ?>
</fieldset>
<?php echo $this->Form->end(__('Save'));?>

</div>
</div>