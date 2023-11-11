<div class="observacions view">
<h2><?php echo __('Observacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($observacion['Familia']['hogar'], array('controller' => 'familias', 'action' => 'view', $observacion['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgovivienda'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['riesgovivienda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgoprimerainfancia'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['riesgoprimerainfancia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgoenfermedadcronica'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['riesgoenfermedadcronica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgogestante'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['riesgogestante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgosicosocial'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['riesgosicosocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgofamilia'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['riesgofamilia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anexo'); ?></dt>
		<dd>
			<?php echo h($observacion['Observacion']['anexo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Observacion'), array('action' => 'edit', $observacion['Observacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Observacion'), array('action' => 'delete', $observacion['Observacion']['id']), array(), __('Are you sure you want to delete # %s?', $observacion['Observacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Observacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Observacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
	</ul>
</div>
