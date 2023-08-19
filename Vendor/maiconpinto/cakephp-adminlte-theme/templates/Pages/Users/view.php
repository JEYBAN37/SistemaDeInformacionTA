<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


 
    <section class="content-header">
      <h1>
        Perfil de usuario
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <?php echo $this->Html->image('user4-128x128.jpg', ['class' => 'profile-user-img img-responsive img-circle', 'alt' => 'User profile picture']); ?>

              <h3 class="profile-username text-center"><?= h($user->nombre) ?></h3>

              <p class="text-muted text-center">Ingeniero de Sistemas</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>ID</b> <a class="pull-right"><?= h($user->id) ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?= h($user->email) ?></a>
                </li>
                <li class="list-group-item">
                  <b>Contraseña</b> <a class="pull-right"><?= h($user->password) ?></a>
                </li>
                <li class="list-group-item">
                  <b>Creado</b> <a class="pull-right"><?= h($user->created) ?></a>
                </li>

                <li class="list-group-item">
                  <b>Modifcado</b> <a class="pull-right">  <?= h($user->modified) ?></a>
                </li>

          

             
                <li class="list-group-item">
                <b><a><?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class' => 'tn btn-primary btn-block']) ?></a></b>
                 </li>   
                </ul> 


              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       </div>  

  </section>
    <!-- /.content -->