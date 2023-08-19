<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto[]|\Cake\Collection\CollectionInterface $productos
 */
?>
<div class="productos index content">
    <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numproductos') ?></th>
                    <th><?= $this->Paginator->sort('lineas') ?></th>
                    <th><?= $this->Paginator->sort('dimensiones') ?></th>
                    <th><?= $this->Paginator->sort('nombredim') ?></th>
                    <th><?= $this->Paginator->sort('costodim') ?></th>
                    <th><?= $this->Paginator->sort('activity') ?></th>
                    <th><?= $this->Paginator->sort('vidacursos') ?></th>
                    <th><?= $this->Paginator->sort('entorno') ?></th>
                    <th><?= $this->Paginator->sort('tecnologias') ?></th>
                    <th><?= $this->Paginator->sort('porcproducto') ?></th>
                    <th><?= $this->Paginator->sort('porctareas') ?></th>
                    <th><?= $this->Paginator->sort('clasobjetivos') ?></th>
                    <th><?= $this->Paginator->sort('responsable_id') ?></th>
                    <th><?= $this->Paginator->sort('fecha_registro') ?></th>
                    <th><?= $this->Paginator->sort('porcentajeavance') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('referente_id') ?></th>
                    <th><?= $this->Paginator->sort('enlace') ?></th>
                    <th><?= $this->Paginator->sort('enlace2') ?></th>
                    <th><?= $this->Paginator->sort('anexo') ?></th>
                    <th><?= $this->Paginator->sort('dirproduc') ?></th>
                    <th><?= $this->Paginator->sort('fecha_actualizado') ?></th>
                    <th><?= $this->Paginator->sort('fecha_revisado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->id) ?></td>
                    <td><?= $this->Number->format($producto->numproductos) ?></td>
                    <td><?= h($producto->lineas) ?></td>
                    <td><?= h($producto->dimensiones) ?></td>
                    <td><?= h($producto->nombredim) ?></td>
                    <td><?= h($producto->costodim) ?></td>
                    <td><?= h($producto->activity) ?></td>
                    <td><?= h($producto->vidacursos) ?></td>
                    <td><?= h($producto->entorno) ?></td>
                    <td><?= h($producto->tecnologias) ?></td>
                    <td><?= h($producto->porcproducto) ?></td>
                    <td><?= h($producto->porctareas) ?></td>
                    <td><?= h($producto->clasobjetivos) ?></td>
                    <td><?= $producto->has('responsable') ? $this->Html->link($producto->responsable->id, ['controller' => 'Responsables', 'action' => 'view', $producto->responsable->id]) : '' ?></td>
                    <td><?= h($producto->fecha_registro) ?></td>
                    <td><?= $this->Number->format($producto->porcentajeavance) ?></td>
                    <td><?= h($producto->estado) ?></td>
                    <td><?= $producto->has('referente') ? $this->Html->link($producto->referente->id, ['controller' => 'Referentes', 'action' => 'view', $producto->referente->id]) : '' ?></td>
                    <td><?= h($producto->enlace) ?></td>
                    <td><?= h($producto->enlace2) ?></td>
                    <td><?= h($producto->anexo) ?></td>
                    <td><?= h($producto->dirproduc) ?></td>
                    <td><?= h($producto->fecha_actualizado) ?></td>
                    <td><?= h($producto->fecha_revisado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $producto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
