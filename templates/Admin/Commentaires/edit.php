<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commentaire $commentaire
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commentaire->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commentaire->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Commentaires'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commentaires form content">
            <?= $this->Form->create($commentaire) ?>
            <fieldset>
                <legend><?= __('Edit Commentaire') ?></legend>
                <?php
                    echo $this->Form->control('comment');
                    echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
