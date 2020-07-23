<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription $souscription
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $souscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Souscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="souscriptions form content">
            <?= $this->Form->create($souscription) ?>
            <fieldset>
                <legend><?= __('Edit Souscription') ?></legend>
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('offre_id', ['options' => $offres, 'empty' => true]);
                    echo $this->Form->control('periode_id', ['options' => $periodes, 'empty' => true]);
                    echo $this->Form->control('montanttotal');
                    echo $this->Form->control('datedebut', ['empty' => true]);
                    echo $this->Form->control('datefin', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
