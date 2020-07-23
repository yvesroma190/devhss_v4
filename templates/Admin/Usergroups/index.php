<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usergroup[]|\Cake\Collection\CollectionInterface $usergroups
 */
?>
<!--<div class="usergroups index content">
    <?= $this->Html->link(__('New Usergroup'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usergroups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usergroups as $usergroup) : ?>
                <tr>
                    <td><?= $this->Number->format($usergroup->id) ?></td>
                    <td><?= h($usergroup->name) ?></td>
                    <td><?= h($usergroup->created) ?></td>
                    <td><?= h($usergroup->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usergroup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usergroup->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usergroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usergroup->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des Groupes d'utilisateurs</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <a href="<?= $this->Url->build(['controller' => 'Usergroups', 'action' => 'add']) ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajouter un groupe</span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">




    <!-- Content Row -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des groupes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($usergroups as $usergroup) : ?>
                            <tr>
                                <td><?= $this->Number->format($usergroup->id) ?></td>
                                <td><?= h($usergroup->name) ?></td>
                                <td><?= h($usergroup->created) ?></td>
                                <td><?= h($usergroup->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('Détails'), ['action' => 'view', $usergroup->id]) ?>
                                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $usergroup->id]) ?>
                                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $usergroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usergroup->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>