<div class="canalizaciones view">
<h2><?php echo __('Canalizacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sede'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['sede']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TelefonoInstitucional'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['telefonoInstitucional']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enlaceuno'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['enlaceuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargouno'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['cargouno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono1'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['telefono1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo1'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['correo1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enlacedos'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['enlacedos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargodos'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['cargodos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono2'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['telefono2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo2'); ?></dt>
		<dd>
			<?php echo h($canalizacion['Canalizacion']['correo2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Canalizacion'), array('action' => 'edit', $canalizacion['Canalizacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Canalizacion'), array('action' => 'delete', $canalizacion['Canalizacion']['id']), array(), __('Are you sure you want to delete # %s?', $canalizacion['Canalizacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Canalizaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Canalizacion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
