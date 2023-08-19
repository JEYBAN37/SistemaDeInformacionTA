<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Referente $referente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Referente'), ['action' => 'edit', $referente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Referente'), ['action' => 'delete', $referente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Referentes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Referente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="referentes view content">
            <h3><?= h($referente->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipodoc') ?></th>
                    <td><?= h($referente->tipodoc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombres') ?></th>
                    <td><?= h($referente->nombres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($referente->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($referente->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profesion') ?></th>
                    <td><?= h($referente->profesion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo') ?></th>
                    <td><?= h($referente->cargo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Familiar') ?></th>
                    <td><?= h($referente->familiar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Parentesco') ?></th>
                    <td><?= h($referente->parentesco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($referente->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $this->Number->format($referente->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= $this->Number->format($referente->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel Familiar') ?></th>
                    <td><?= $this->Number->format($referente->tel_familiar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Nac') ?></th>
                    <td><?= h($referente->fecha_nac) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Productos') ?></h4>
                <?php if (!empty($referente->productos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Numproductos') ?></th>
                            <th><?= __('Lineas') ?></th>
                            <th><?= __('Dimensiones') ?></th>
                            <th><?= __('Nombredim') ?></th>
                            <th><?= __('Costodim') ?></th>
                            <th><?= __('Linormativas') ?></th>
                            <th><?= __('Resultado') ?></th>
                            <th><?= __('Activity') ?></th>
                            <th><?= __('Vidacursos') ?></th>
                            <th><?= __('Entorno') ?></th>
                            <th><?= __('Tecnologias') ?></th>
                            <th><?= __('Porcproducto') ?></th>
                            <th><?= __('Tarea') ?></th>
                            <th><?= __('Porctareas') ?></th>
                            <th><?= __('Clasobjetivos') ?></th>
                            <th><?= __('Evidencia') ?></th>
                            <th><?= __('Responsable Id') ?></th>
                            <th><?= __('Fecha Registro') ?></th>
                            <th><?= __('Porcentajeavance') ?></th>
                            <th><?= __('Observacionpic') ?></th>
                            <th><?= __('Observacionsms') ?></th>
                            <th><?= __('Estado') ?></th>
                            <th><?= __('Referente Id') ?></th>
                            <th><?= __('Enlace') ?></th>
                            <th><?= __('Enlace2') ?></th>
                            <th><?= __('Anexo') ?></th>
                            <th><?= __('Dirproduc') ?></th>
                            <th><?= __('Fecha Actualizado') ?></th>
                            <th><?= __('Fecha Revisado') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($referente->productos as $productos) : ?>
                        <tr>
                            <td><?= h($productos->id) ?></td>
                            <td><?= h($productos->numproductos) ?></td>
                            <td><?= h($productos->lineas) ?></td>
                            <td><?= h($productos->dimensiones) ?></td>
                            <td><?= h($productos->nombredim) ?></td>
                            <td><?= h($productos->costodim) ?></td>
                            <td><?= h($productos->linormativas) ?></td>
                            <td><?= h($productos->resultado) ?></td>
                            <td><?= h($productos->activity) ?></td>
                            <td><?= h($productos->vidacursos) ?></td>
                            <td><?= h($productos->entorno) ?></td>
                            <td><?= h($productos->tecnologias) ?></td>
                            <td><?= h($productos->porcproducto) ?></td>
                            <td><?= h($productos->tarea) ?></td>
                            <td><?= h($productos->porctareas) ?></td>
                            <td><?= h($productos->clasobjetivos) ?></td>
                            <td><?= h($productos->evidencia) ?></td>
                            <td><?= h($productos->responsable_id) ?></td>
                            <td><?= h($productos->fecha_registro) ?></td>
                            <td><?= h($productos->porcentajeavance) ?></td>
                            <td><?= h($productos->observacionpic) ?></td>
                            <td><?= h($productos->observacionsms) ?></td>
                            <td><?= h($productos->estado) ?></td>
                            <td><?= h($productos->referente_id) ?></td>
                            <td><?= h($productos->enlace) ?></td>
                            <td><?= h($productos->enlace2) ?></td>
                            <td><?= h($productos->anexo) ?></td>
                            <td><?= h($productos->dirproduc) ?></td>
                            <td><?= h($productos->fecha_actualizado) ?></td>
                            <td><?= h($productos->fecha_revisado) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Productos', 'action' => 'view', $productos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Productos', 'action' => 'edit', $productos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productos', 'action' => 'delete', $productos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
