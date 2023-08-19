<?php $this->layout = 'AdminLTE.default -dashboard'; ?>


<form action="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'login']); ?>" method="post">

   <?php echo $this->element('home_login'); ?>
</form>



