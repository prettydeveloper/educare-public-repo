<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <?php echo $this->Html->link($title,
            array('controller' => 'pages', 'action' => ''), 
            array('class' => 'brand') );?>
          <div class="nav-collapse collapse">
          	<p class="navbar-text pull-right">
              <!--<?php 
              if($this->Session->read('Auth.User.username')) {
                  echo $this->Session->read('Auth.User.username');
                  echo ' <i class="icon-off icon-white"></i> ';
                  echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));
               }?>-->
            </p>
            <ul class="nav">
              <li class="active">
                <?php echo $this->Html->link('Home',
    			array('controller' => 'pages', 'action' => ''));?>
              </li>
              <li>
               <?php echo $this->Html->link(__('Schools'),
    			array('controller' => 'schools', 'action' => ''));?>
              </li>
              <li>
                <?php echo $this->Html->link(__('Laboratories'),
                array('controller' => 'laboratories', 'action' => ''));?>
              </li>
              <li>
                <?php echo $this->Html->link(__('Grades'),
    			array('controller' => 'grades', 'action' => ''));?>
              </li>
              <li>
                <?php echo $this->Html->link(__('Students'),
    			array('controller' => 'students', 'action' => ''));?>
              </li>
              <li>
                <?php echo $this->Html->link(__('Administration'),
                array('controller' => 'pages', 'action' => 'admin'));?>
              </li>
            </ul>
            <?php 
            if($this->Session->read('Auth.User.username')) {
              echo '<ul class="nav pull-right">';
              echo '<li>'.$this->Html->link($this->Session->read('Auth.User.username'), 
                array('controller' => 'users', 'action' => '')).'</li>';
              echo '<li><a href="'.$this->Html->url(array('controller' => 'users', 'action' => 'logout')).'">
                      <i class="icon-off icon-white"></i> Logout</a></li>';
              echo '</ul>';
            ?> 
            <?php } //endif ?> 
          </div><!--/.nav-collapse -->
        </div>
    </div>
</div>