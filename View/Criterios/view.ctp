<?php $this->layout = 'printactividades' ?>

<div class="criterios view">
<h2><?php echo __('Criterio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>

		
			<?php echo h($criterio['Criterio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instrumento Id'); ?></dt>
		<dd>
			<!--?php echo h($criterio['Criterio']['instrumento_id']); ?-->
			&nbsp;
			<td ><?php echo ($criterio['Instrumento']['nombre_instrumento']); ?></td>

		
		</dd>
		<dt><?php echo __('Criterio'); ?></dt>
		<dd>
			<?php echo h($criterio['Criterio']['criterio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Definicion'); ?></dt>
		<dd>
			<?php echo h($criterio['Criterio']['definicion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Criterio'), array('action' => 'edit', $criterio['Criterio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Criterio'), array('action' => 'delete', $criterio['Criterio']['id']), array(), __('Are you sure you want to delete # %s?', $criterio['Criterio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Criterios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Criterio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcriterios'), array('controller' => 'subcriterios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Subcriterios'); ?></h3>
	<?php if (!empty($criterio['Subcriterio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Criterio Id'); ?></th>
		<th><?php echo __('Subcriterio'); ?></th>
		<th><?php echo __('Porcentaje'); ?></th>
		<th><?php echo __('Definicion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($criterio['Subcriterio'] as $subcriterio): ?>
		<tr>
			<td><?php echo $subcriterio['id']; ?></td>
			<td><?php echo $subcriterio['criterio_id']; ?></td>
			<td><?php echo $subcriterio['subcriterio']; ?></td>
			<td><?php echo $subcriterio['porcentaje']; ?></td>
			<td><?php echo $subcriterio['definicion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subcriterios', 'action' => 'view', $subcriterio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subcriterios', 'action' => 'edit', $subcriterio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subcriterios', 'action' => 'delete', $subcriterio['id']), array(), __('Are you sure you want to delete # %s?', $subcriterio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subcriterio'), array('controller' => 'subcriterios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
