<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etatpaiement[]|\Cake\Collection\CollectionInterface $etatpaiements
 */
?>
<!--<div class="etatpaiements index content">
    <?= $this->Html->link(__('New Etatpaiement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Etatpaiements') ?></h3>
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
                <?php foreach ($etatpaiements as $etatpaiement) : ?>
                <tr>
                    <td><?= $this->Number->format($etatpaiement->id) ?></td>
                    <td><?= h($etatpaiement->name) ?></td>
                    <td><?= h($etatpaiement->created) ?></td>
                    <td><?= h($etatpaiement->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $etatpaiement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etatpaiement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etatpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etatpaiement->id)]) ?>
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
        <h1 class="h3 mb-0 text-gray-800">Gestion des états de paiements</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <a href=<?= $this->Url->build(['controller' => 'Etatpaiements', 'action' => 'add']) ?> class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajouter un état de paiement</span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">




    <!-- Content Row -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des états de paiement</h6>
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
                        <?php foreach ($etatpaiements as $etatpaiement) : ?>
                            <tr>
                                <td><?= $this->Number->format($etatpaiement->id) ?></td>
                                <td><?= h($etatpaiement->name) ?></td>
                                <td><?= h($etatpaiement->created) ?></td>
                                <td><?= h($etatpaiement->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('Détails'), ['action' => 'view', $etatpaiement->id]) ?>
                                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $etatpaiement->id]) ?>
                                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $etatpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etatpaiement->id)]) ?>
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