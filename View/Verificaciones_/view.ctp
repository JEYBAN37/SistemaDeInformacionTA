<div class="verificaciones view">
<h2><?php echo __('Verificacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcriterio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($verificacion['Subcriterio']['subcriterio'], array('controller' => 'subcriterios', 'action' => 'view', $verificacion['Subcriterio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Historias'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['numero_historias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dimension Id'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['dimension_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instrumento Id'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['instrumento_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criterio Id'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['criterio_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo $this->Html->link($verificacion['Responsable']['id'], array('controller' => 'responsables', 'action' => 'view', $verificacion['Responsable']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 1'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 2'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 3'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 4'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 5'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 6'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 7'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_7']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 8'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_8']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 9'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_9']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 10'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_10']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 11'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_11']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 12'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_12']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 13'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_13']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 14'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_14']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hcl 15'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['hcl_15']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($verificacion['Verificacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Verificacion'), array('action' => 'edit', $verificacion['Verificacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Verificacion'), array('action' => 'delete', $verificacion['Verificacion']['id']), array(), __('Are you sure you want to delete # %s?', $verificacion['Verificacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Verificaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Verificacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('controller' => 'subcriterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
