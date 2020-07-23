<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materielinclus[]|\Cake\Collection\CollectionInterface $materielinclus
 */
?>
<!--<div class="materielinclus index content">
    <?= $this->Html->link(__('New Materielinclus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Materielinclus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('offre_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materielinclus as $materielinclus) : ?>
                <tr>
                    <td><?= $this->Number->format($materielinclus->id) ?></td>
                    <td><?= $materielinclus->has('offre') ? $this->Html->link($materielinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $materielinclus->offre->id]) : '' ?></td>
                    <td><?= h($materielinclus->name) ?></td>
                    <td><?= h($materielinclus->created) ?></td>
                    <td><?= h($materielinclus->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $materielinclus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materielinclus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materielinclus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materielinclus->id)]) ?>
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
        <h1 class="h3 mb-0 text-gray-800">Gestion des matériels inclus</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <a href=<?= $this->Url->build(['controller' => 'Materielinclus', 'action' => 'add']) ?> class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajouter un matériel inclu</span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">




    <!-- Content Row -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des matériels inclus</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('offre_id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('offre_id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($materielinclus as $materielinclus) : ?>
                            <tr>
                                <td><?= $this->Number->format($materielinclus->id) ?></td>
                                <td><?= $materielinclus->has('offre') ? $this->Html->link($materielinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $materielinclus->offre->id]) : '' ?></td>
                                <td><?= h($materielinclus->name) ?></td>
                                <td><?= h($materielinclus->created) ?></td>
                                <td><?= h($materielinclus->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('Détails'), ['action' => 'view', $materielinclus->id]) ?>
                                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $materielinclus->id]) ?>
                                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $materielinclus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materielinclus->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
    </div>

</div>