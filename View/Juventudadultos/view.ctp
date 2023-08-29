<div class="juventudadultos view">
<h2><?php echo __('Juventudadulto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juventudadulto['Familia']['apellidosfamilia'], array('controller' => 'familias', 'action' => 'view', $juventudadulto['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($juventudadulto['Persona']['apellidosnombre'], array('controller' => 'personas', 'action' => 'view', $juventudadulto['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['discapacidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicemasacorporal'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['indicemasacorporal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensionarterial'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['tensionarterial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['condicioncronica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica1'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['condicioncronica1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ancededenteginecologico'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['ancededenteginecologico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esquemavacunacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['esquemavacunacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desparasitacion'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['desparasitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valoracionmedica'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['valoracionmedica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valoracionrias'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['valoracionrias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valoracionrias1'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['valoracionrias1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tomacitologia'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['tomacitologia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saludoral'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['saludoral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Higieneoral'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['higieneoral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iniciovidasexual'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['iniciovidasexual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metodosanticonceptivos'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['metodosanticonceptivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Infeccionestransmisionsexual'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['infeccionestransmisionsexual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumospa'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['consumospa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumospa1'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['consumospa1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['riesgopsicosocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgopsicosocial1'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['riesgopsicosocial1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudio'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['estudio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rendimientoescolar'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['rendimientoescolar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sopechamaltrato'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['sopechamaltrato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciondos'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eduacionuno'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['eduacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educaciondos'); ?></dt>
		<dd>
			<?php echo h($juventudadulto['Juventudadulto']['educaciondos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Juventudadulto'), array('action' => 'edit', $juventudadulto['Juventudadulto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Juventudadulto'), array('action' => 'delete', $juventudadulto['Juventudadulto']['id']), array(), __('Are you sure you want to delete # %s?', $juventudadulto['Juventudadulto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Juventudadultos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Juventudadulto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
