<div class="user-panel">
    <div class="pull-left image">

    	
        <?php echo $this->Html->image('user4-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
    </div>
    <div class="pull-left info">
        <p>Nombre ususario</p>


        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       <i class="fa fa-power-off"></i> 
        <?= $this->Html->link("Salir",['controller'=>'Users','action'=>'logout']) ?>
    </div>
</div>

