<?php use Cake\Core\Configure; ?>
<nav class="navbar navbar-static-top">

  <?php if (isset($layout) && $layout == 'top'): ?>
  <div class="container">

    <div class="navbar-header">
      <a href="<?php echo $this->Url->build('/'); ?>" class="navbar-brand"><?php echo Configure::read('Theme.logo.large') ?></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
        </div>
      </form>
    </div>
    <!-- /.navbar-collapse -->
  <?php else: ?>

    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

  <?php endif; ?>



  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      
      <!-- Notifications: style can be found in dropdown.less -->

      <!-- Tasks: style can be found in dropdown.less -->
      
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php echo $this->Html->image('icons-user-profile.png', array('class' => 'user-image', 'alt' => 'User Image')); ?>
          <span class="hidden-xs">Login</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <?php echo $this->Html->image('logopasto.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>

            
              <p>
                Bienvenido
                <small>Iniciar Sesión</small>
              </p>

                     <form action="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'login']); ?>" method="post">
         
          <div  class="login-box-body">
          
                <?= $this->Flash->render() ?>    
                <?= $this->Form->create() ?>

       
                  <fieldset>       
                    <?= $this->Form->control('email', ['required' => true]) ?>
                    <?= $this->Form->control('password', ['required' => true]) ?>
                  </fieldset>    
               
                  <?= $this->Form->submit(__('Login')); ?>
                  <?= $this->Form->end() ?>

            </div>      
            

             
          </li>
          <!-- Menu Body -->
          
          <!-- Menu Footer-->
          
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <?php if (!isset($layout)): ?>
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li>
      <?php endif; ?>
    </ul>
  </div>

  <?php if (isset($layout) && $layout == 'top'): ?>
  </div>
  <?php endif; ?>
</nav>