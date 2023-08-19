<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsable $responsable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $responsable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $responsable->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Responsables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="responsables form content">
            <?= $this->Form->create($responsable) ?>
            <fieldset>
                <legend><?= __('Edit Responsable') ?></legend>
                <?php
                    echo $this->Form->control('tipodoc');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('nombres');
                    echo $this->Form->control('fecha_nac');
                    echo $this->Form->control('celular');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('profesion');
                    echo $this->Form->control('cargo');
                    echo $this->Form->control('familiar');
                    echo $this->Form->control('parentesco');
                    echo $this->Form->control('tel_familiar');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
