<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/"><?php echo $title; ?></a>
          <div class="nav-collapse collapse">
          	<p class="navbar-text pull-right">
              <?php echo $this->Session->read('Auth.User.username') ?> <i class="icon-off icon-white"></i> <?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));?>
            </p>
            <ul class="nav">
              <li class="active">
                <?php echo $this->Html->link('Home',
    			array('controller' => 'pages', 'action' => ''));?>
              </li>
              <li>
               <?php echo $this->Html->link('Scuole',
    			array('controller' => 'schools', 'action' => ''));?>
              </li>
              <li>
                <?php echo $this->Html->link('Classi',
    			array('controller' => 'grades', 'action' => ''));?>
              </li>
              <li>
                <?php echo $this->Html->link('Studenti',
    			array('controller' => 'students', 'action' => ''));?>
              </li>
              <!--<li>
                <?php echo $this->Html->link('Insegnanti',
    			array('controller' => 'teachers', 'action' => ''));?>
              </li>
              <li>
                <?php echo $this->Html->link('Educatori',
    			array('controller' => 'educators', 'action' => ''));?>
              </li>-->
              <li>
                <?php echo $this->Html->link('Amministrazione',
    			array('controller' => 'admin', 'action' => ''));?>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
</div>