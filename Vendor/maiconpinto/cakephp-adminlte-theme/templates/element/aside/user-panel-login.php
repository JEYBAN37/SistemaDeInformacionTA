<div class="user-panel">
    <div class="pull-left info">
        <p>Ingreso</p>        
    </div>  
            
    <!-- /.col -->
      <form action="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'login']); ?>" method="post">
  <div  class="login-box-body">
    <p class="login-box-msg">Inicia sesión</p>

    <?= $this->Flash->render() ?>    
    <?= $this->Form->create() ?>

 
    <fieldset>       
      <?= $this->Form->control('email', ['required' => true]) ?>
      <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>    
       
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
    
</div>

   
</form>
</div>



