<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offre->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Offres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offres form content">
            <?= $this->Form->create($offre) ?>
            <fieldset>
                <legend><?= __('Edit Offre') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('prix');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
