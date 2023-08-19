<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsable[]|\Cake\Collection\CollectionInterface $responsables
 */
?>
<div class="responsables index content">
    <?= $this->Html->link(__('New Responsable'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Responsables') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipodoc') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('nombres') ?></th>
                    <th><?= $this->Paginator->sort('fecha_nac') ?></th>
                    <th><?= $this->Paginator->sort('celular') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('profesion') ?></th>
                    <th><?= $this->Paginator->sort('cargo') ?></th>
                    <th><?= $this->Paginator->sort('familiar') ?></th>
                    <th><?= $this->Paginator->sort('parentesco') ?></th>
                    <th><?= $this->Paginator->sort('tel_familiar') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($responsables as $responsable): ?>
                <tr>
                    <td><?= $this->Number->format($responsable->id) ?></td>
                    <td><?= h($responsable->tipodoc) ?></td>
                    <td><?= $this->Number->format($responsable->numero) ?></td>
                    <td><?= h($responsable->nombres) ?></td>
                    <td><?= h($responsable->fecha_nac) ?></td>
                    <td><?= h($responsable->celular) ?></td>
                    <td><?= $this->Number->format($responsable->telefono) ?></td>
                    <td><?= h($responsable->correo) ?></td>
                    <td><?= h($responsable->profesion) ?></td>
                    <td><?= h($responsable->cargo) ?></td>
                    <td><?= h($responsable->familiar) ?></td>
                    <td><?= h($responsable->parentesco) ?></td>
                    <td><?= $this->Number->format($responsable->tel_familiar) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $responsable->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responsable->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responsable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsable->id)]) ?>
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
