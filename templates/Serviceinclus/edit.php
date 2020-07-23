<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serviceinclus $serviceinclus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $serviceinclus->is],
                ['confirm' => __('Are you sure you want to delete # {0}?', $serviceinclus->is), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Serviceinclus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceinclus form content">
            <?= $this->Form->create($serviceinclus) ?>
            <fieldset>
                <legend><?= __('Edit Serviceinclus') ?></legend>
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
