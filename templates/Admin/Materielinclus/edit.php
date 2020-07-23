<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materielinclus $materielinclus
 */
?>
<!--<div class="row">
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
</div>-->



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des matériels inclus</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <a href=<?= $this->Url->build(['controller' => 'Materielinclus', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des matériels inclus</span>
            </a>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'Supprimer cet élément', $materielinclus->id],
                ['confirm' => __('Voulez-vous supprimer cet matériel? # {0}?', $materielinclus->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier le matériel inclus</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($materielinclus) ?>
            <!--<div class="form-group">
                    <?= $this->Form->control('offre_id', ['options' => $offres, 'empty' => true, 'class' => 'form-control', 'label' => 'Nom de l\'offre:']); ?>
                </div>-->
            <div class="form-group">
                <?= $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom du matériel inclus:']); ?>
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