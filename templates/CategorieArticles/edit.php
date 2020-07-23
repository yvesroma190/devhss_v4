<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategorieArticle $categorieArticle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categorieArticle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categorieArticle->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Categorie Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categorieArticles form content">
            <?= $this->Form->create($categorieArticle) ?>
            <fieldset>
                <legend><?= __('Edit Categorie Article') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
