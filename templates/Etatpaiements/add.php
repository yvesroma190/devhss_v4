<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etatpaiement $etatpaiement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Etatpaiements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="etatpaiements form content">
            <?= $this->Form->create($etatpaiement) ?>
            <fieldset>
                <legend><?= __('Add Etatpaiement') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
