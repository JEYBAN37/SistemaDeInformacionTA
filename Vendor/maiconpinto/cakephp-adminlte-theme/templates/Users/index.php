<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>


 <section class="content-header">
      <h1>
        Registro usuarios
        <small><?= $this->Html->link(__('Nuevo registro'), ['action' => 'add'], ['class' => 'button float-right']) ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active"> Registro usuarios</li>
       <li><a ></li>
      </ol>
    </section>


   <section class="content">

    
    <!--h3><?= __('Users') ?></h3-->
      <div class="row">
        <div class="col-xs-12">  
            <div class="box">
                 <div class="box-header">
                  <!--h3 class="box-title">Usuarios</h3-->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>              
                       <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('nombre') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('Avatar') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>


                    </tr>
                    </thead>
                    <tbody>
                  <?php foreach ($users as $user): ?>
                    <tr>
                       <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->nombre) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= @$this->Html->image($user->image, ['style' => 'max-width:50px;height:50px;border-radius:50%;']) ?></td>
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                     <?php endforeach; ?>
                     </tbody>
                   
                 <tfoot>
                    <tr>
                      <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('nombre') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('Avatar') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </tfoot>
                  </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

<?php echo $this->Html->css('AdminLTE./bower_components/datatables.net-bs/css/dataTables.bootstrap.min', ['block' => 'css']); ?>

<!-- DataTables -->
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net/js/jquery.dataTables.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net-bs/js/dataTables.bootstrap.min', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<?php $this->end(); ?>
