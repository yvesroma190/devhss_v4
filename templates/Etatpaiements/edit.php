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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $etatpaiement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $etatpaiement->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Etatpaiements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="etatpaiements form content">
            <?= $this->Form->create($etatpaiement) ?>
            <fieldset>
                <legend><?= __('Edit Etatpaiement') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
