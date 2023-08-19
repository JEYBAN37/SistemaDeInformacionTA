<div class="primerainfancias view">
<h2><?php echo __('Primerainfancia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($primerainfancia['Familia']['id'], array('controller' => 'familias', 'action' => 'view', $primerainfancia['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($primerainfancia['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $primerainfancia['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prematuro'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['prematuro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discapacidad'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['discapacidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bajopeso'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['bajopeso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perímetrocefalico'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['perímetrocefalico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perímetrobraquial'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['perímetrobraquial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perimetrocintura'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['perimetrocintura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perimetrocadera'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['perimetrocadera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tensionarterial'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['tensionarterial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lactanciamaterna'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['lactanciamaterna']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicioncronica'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['condicioncronica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anomaliacongenita'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['anomaliacongenita']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Esquemavacunacion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['esquemavacunacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desparasitacion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['desparasitacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Crecimientoydesarrollo'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['crecimientoydesarrollo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desnutricion'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['desnutricion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Higieneoral'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['higieneoral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desarrolloinfantil'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['desarrolloinfantil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eda'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['eda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Era'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['era']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Riesgodetbc'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['riesgodetbc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saludalternativa'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['saludalternativa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Padresconsumo'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['padresconsumo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sospechaviolencia'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['sospechaviolencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cudadorpermanente'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['cudadorpermanente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizacionuno'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['canalizacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Canalizaciondos'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['canalizaciondos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eduacionuno'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['eduacionuno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Educaciondos'); ?></dt>
		<dd>
			<?php echo h($primerainfancia['Primerainfancia']['educaciondos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Primerainfancia'), array('action' => 'edit', $primerainfancia['Primerainfancia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Primerainfancia'), array('action' => 'delete', $primerainfancia['Primerainfancia']['id']), array(), __('Are you sure you want to delete # %s?', $primerainfancia['Primerainfancia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Primerainfancias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Primerainfancia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
