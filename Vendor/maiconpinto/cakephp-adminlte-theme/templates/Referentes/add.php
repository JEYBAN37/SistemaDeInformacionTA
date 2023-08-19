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
            <?= $this->Html->link(__('List Referentes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="referentes form content">
            <?= $this->Form->create($referente) ?>
            <fieldset>
                <legend><?= __('Add Referente') ?></legend>
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
