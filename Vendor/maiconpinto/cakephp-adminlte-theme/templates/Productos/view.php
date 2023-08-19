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
            <?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productos view content">
            <h3><?= h($producto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lineas') ?></th>
                    <td><?= h($producto->lineas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dimensiones') ?></th>
                    <td><?= h($producto->dimensiones) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombredim') ?></th>
                    <td><?= h($producto->nombredim) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costodim') ?></th>
                    <td><?= h($producto->costodim) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activity') ?></th>
                    <td><?= h($producto->activity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vidacursos') ?></th>
                    <td><?= h($producto->vidacursos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Entorno') ?></th>
                    <td><?= h($producto->entorno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tecnologias') ?></th>
                    <td><?= h($producto->tecnologias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Porcproducto') ?></th>
                    <td><?= h($producto->porcproducto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Porctareas') ?></th>
                    <td><?= h($producto->porctareas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clasobjetivos') ?></th>
                    <td><?= h($producto->clasobjetivos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsable') ?></th>
                    <td><?= $producto->has('responsable') ? $this->Html->link($producto->responsable->id, ['controller' => 'Responsables', 'action' => 'view', $producto->responsable->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($producto->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Referente') ?></th>
                    <td><?= $producto->has('referente') ? $this->Html->link($producto->referente->id, ['controller' => 'Referentes', 'action' => 'view', $producto->referente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Enlace') ?></th>
                    <td><?= h($producto->enlace) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enlace2') ?></th>
                    <td><?= h($producto->enlace2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anexo') ?></th>
                    <td><?= h($producto->anexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dirproduc') ?></th>
                    <td><?= h($producto->dirproduc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($producto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numproductos') ?></th>
                    <td><?= $this->Number->format($producto->numproductos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Porcentajeavance') ?></th>
                    <td><?= $this->Number->format($producto->porcentajeavance) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Registro') ?></th>
                    <td><?= h($producto->fecha_registro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Actualizado') ?></th>
                    <td><?= h($producto->fecha_actualizado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Revisado') ?></th>
                    <td><?= h($producto->fecha_revisado) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Linormativas') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($producto->linormativas)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Resultado') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($producto->resultado)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Tarea') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($producto->tarea)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Evidencia') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($producto->evidencia)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Observacionpic') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($producto->observacionpic)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Observacionsms') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($producto->observacionsms)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
