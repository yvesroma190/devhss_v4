<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles form content">
            <?= $this->Form->create($article) ?>
            <fieldset>
                <legend><?= __('Edit Article') ?></legend>
                <?php
                echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                echo $this->Form->control('categorie_article_id', ['options' => $categorieArticles, 'empty' => true]);
                echo $this->Form->control('title');
                echo $this->Form->control('body');
                echo $this->Form->control('published');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>-->



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des articles</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <a href=<?= $this->Url->build(['controller' => 'Articles', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des articles</span>
            </a>
            <?= $this->Form->postLink(
                __('Supprimer cet article'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('Voulez-vous supprimer cet article? # {0}?', $article->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier l'article</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($article) ?>
            <div class="form-group">
                <?= $this->Form->control('user_id', ['options' => $users, 'empty' => true, 'class' => 'form-control', 'label' => 'Nom de l\'utilisateur:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('categorie_article_id', ['options' => $categorieArticles, 'empty' => true, 'class' => 'form-control', 'label' => 'Catégorie:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('title', ['type' => 'text', 'class' => 'form-control', 'label' => 'Titre:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('body', ['type' => 'textarea', 'class' => 'form-control', 'label' => 'Contenu:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('published', ['type' => 'text', 'class' => 'form-control', 'label' => 'Publié:']); ?>
            </div>

            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Modifier</span>
            </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>