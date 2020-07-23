<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periode $periode
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $periode->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $periode->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Periodes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="periodes form content">
            <?= $this->Form->create($periode) ?>
            <fieldset>
                <legend><?= __('Edit Periode') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('nbmois');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
