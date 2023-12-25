<div class="visitasnegadas view">
<h2><?php echo __('Visitasnegada'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($visitasnegada['Visitasnegada']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($visitasnegada['Ubicacion']['microterritorio'], array('controller' => 'ubicaciones', 'action' => 'view', $visitasnegada['Ubicacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($visitasnegada['Visitasnegada']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombreshabitante'); ?></dt>
		<dd>
			<?php echo h($visitasnegada['Visitasnegada']['nombreshabitante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodocumento'); ?></dt>
		<dd>
			<?php echo h($visitasnegada['Visitasnegada']['tipodocumento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numerodocumento'); ?></dt>
		<dd>
			<?php echo h($visitasnegada['Visitasnegada']['numerodocumento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($visitasnegada['Visitasnegada']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estadocasa'); ?></dt>
		<dd>
			<?php echo h($visitasnegada['Visitasnegada']['estadocasa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($visitasnegada['Visitasnegada']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($visitasnegada['Responsable']['encuestador'], array('controller' => 'responsables', 'action' => 'view', $visitasnegada['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($visitasnegada['Visitasnegada']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Visitasnegada'), array('action' => 'edit', $visitasnegada['Visitasnegada']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Visitasnegada'), array('action' => 'delete', $visitasnegada['Visitasnegada']['id']), array(), __('Are you sure you want to delete # %s?', $visitasnegada['Visitasnegada']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Visitasnegadas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visitasnegada'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ubicaciones'), array('controller' => 'ubicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ubicacion'), array('controller' => 'ubicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
