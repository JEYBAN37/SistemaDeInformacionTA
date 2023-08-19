<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Referente[]|\Cake\Collection\CollectionInterface $referentes
 */
?>
<div class="referentes index content">
    <?= $this->Html->link(__('New Referente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Referentes') ?></h3>
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
                <?php foreach ($referentes as $referente): ?>
                <tr>
                    <td><?= $this->Number->format($referente->id) ?></td>
                    <td><?= h($referente->tipodoc) ?></td>
                    <td><?= $this->Number->format($referente->numero) ?></td>
                    <td><?= h($referente->nombres) ?></td>
                    <td><?= h($referente->fecha_nac) ?></td>
                    <td><?= h($referente->celular) ?></td>
                    <td><?= $this->Number->format($referente->telefono) ?></td>
                    <td><?= h($referente->correo) ?></td>
                    <td><?= h($referente->profesion) ?></td>
                    <td><?= h($referente->cargo) ?></td>
                    <td><?= h($referente->familiar) ?></td>
                    <td><?= h($referente->parentesco) ?></td>
                    <td><?= $this->Number->format($referente->tel_familiar) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $referente->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $referente->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $referente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referente->id)]) ?>
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
