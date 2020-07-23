<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                echo $this->Form->control('usergroup_id', ['options' => $usergroups, 'empty' => true]);
                echo $this->Form->control('name');
                echo $this->Form->control('email');
                echo $this->Form->control('password');
                echo $this->Form->control('cel');
                echo $this->Form->control('tel');
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
        <h1 class="h3 mb-0 text-gray-800">Gestion des utilisateurs</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <a href=<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?> class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-list"></i>
                </span>
                <span class="text">Liste des utilisateurs</span>
            </a>
            <?= $this->Form->postLink(
                __('Supprimer'),
                ['action' => 'Supprimer cet groupe', $user->id],
                ['confirm' => __('Voulez-vous supprimer cet groupe? # {0}?', $user->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier l'utilisateurs</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($user) ?>
            <div class="form-group">
                <?= $this->Form->control('usergroup_id', ['options' => $usergroups, 'empty' => false, 'class' => 'form-control', 'label' => 'Nom du groupe:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('name', ['type' => 'text', 'class' => 'form-control', 'label' => 'Nom et prénoms:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('email', ['type' => 'email', 'class' => 'form-control', 'label' => 'Email:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('password', ['type' => 'password', 'class' => 'form-control', 'label' => 'Mot de passe:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('cel', ['type' => 'text', 'class' => 'form-control', 'label' => 'N° Cellulaire:']); ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('tel', ['type' => 'text', 'class' => 'form-control', 'label' => 'N° Fixe:']); ?>
            </div>

            <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Modifier l'utilisateur</span>
            </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>