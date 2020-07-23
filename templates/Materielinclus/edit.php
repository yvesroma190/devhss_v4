<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materielinclus $materielinclus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materielinclus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materielinclus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Materielinclus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materielinclus form content">
            <?= $this->Form->create($materielinclus) ?>
            <fieldset>
                <legend><?= __('Edit Materielinclus') ?></legend>
                <?php
                    echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
