<div class="gestantes view">
<h2><?php echo __('Gestante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gestante['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $gestante['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gestante['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $gestante['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cursovida'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['cursovida']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controprenatal'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['controprenatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgomaterno'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['riesgomaterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valoracionmedica'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['valoracionmedica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paraclinicos'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['paraclinicos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['riesgopsicosocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciondos'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eduacionuno'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['eduacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educaciondos'); ?></dt>
		<dd>
			<?php echo h($gestante['Gestante']['educaciondos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gestante'), array('action' => 'edit', $gestante['Gestante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gestante'), array('action' => 'delete', $gestante['Gestante']['id']), array(), __('Are you sure you want to delete # %s?', $gestante['Gestante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gestantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gestante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
