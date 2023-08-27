<div class="infantils view">
<h2><?php echo __('Infantil'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($infantil['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $infantil['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($infantil['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $infantil['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['discapacidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicemasacorporal'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['indicemasacorporal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensionarterial'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['tensionarterial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['condicioncronica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esquemavacunacion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['esquemavacunacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desparasitacion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['desparasitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crecimientoydesarrollo'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['crecimientoydesarrollo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desnutricion'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['desnutricion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Higieneoral'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['higieneoral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desarrolloinfantil'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['desarrolloinfantil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudio'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['estudio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sopechamaltrato'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['sopechamaltrato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rendimientoescolar'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['rendimientoescolar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciondos'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eduacionuno'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['eduacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educaciondos'); ?></dt>
		<dd>
			<?php echo h($infantil['Infantil']['educaciondos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Infantil'), array('action' => 'edit', $infantil['Infantil']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Infantil'), array('action' => 'delete', $infantil['Infantil']['id']), array(), __('Are you sure you want to delete # %s?', $infantil['Infantil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Infantils'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infantil'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
