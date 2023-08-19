<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productos form content">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <legend><?= __('Edit Producto') ?></legend>
                <?php
                    echo $this->Form->control('numproductos');
                    echo $this->Form->control('lineas');
                    echo $this->Form->control('dimensiones');
                    echo $this->Form->control('nombredim');
                    echo $this->Form->control('costodim');
                    echo $this->Form->control('linormativas');
                    echo $this->Form->control('resultado');
                    echo $this->Form->control('activity');
                    echo $this->Form->control('vidacursos');
                    echo $this->Form->control('entorno');
                    echo $this->Form->control('tecnologias');
                    echo $this->Form->control('porcproducto');
                    echo $this->Form->control('tarea');
                    echo $this->Form->control('porctareas');
                    echo $this->Form->control('clasobjetivos');
                    echo $this->Form->control('evidencia');
                    echo $this->Form->control('responsable_id', ['options' => $responsables]);
                    echo $this->Form->control('fecha_registro');
                    echo $this->Form->control('porcentajeavance');
                    echo $this->Form->control('observacionpic');
                    echo $this->Form->control('observacionsms');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('referente_id', ['options' => $referentes]);
                    echo $this->Form->control('enlace');
                    echo $this->Form->control('enlace2');
                    echo $this->Form->control('anexo');
                    echo $this->Form->control('dirproduc');
                    echo $this->Form->control('fecha_actualizado');
                    echo $this->Form->control('fecha_revisado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
