<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement[]|\Cake\Collection\CollectionInterface $paiements
 */
?>
<!--<div class="paiements index content">
    <?= $this->Html->link(__('New Paiement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Paiements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('souscription_id') ?></th>
                    <th><?= $this->Paginator->sort('offre_id') ?></th>
                    <th><?= $this->Paginator->sort('datepaiement') ?></th>
                    <th><?= $this->Paginator->sort('etatpaiement_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paiements as $paiement) : ?>
                <tr>
                    <td><?= $this->Number->format($paiement->id) ?></td>
                    <td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
                    <td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
                    <td><?= $paiement->has('offre') ? $this->Html->link($paiement->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiement->offre->id]) : '' ?></td>
                    <td><?= h($paiement->datepaiement) ?></td>
                    <td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
                    <td><?= h($paiement->created) ?></td>
                    <td><?= h($paiement->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $paiement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paiement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?>
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
        <h1 class="h3 mb-0 text-gray-800">Gestion des Paiements</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">

            <!--<a href="<?= $this->Url->build(['controller' => 'Paiements', 'action' => 'add']) ?>" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajouter une offre</span>
            </a>-->
            <a href=<?= $this->Url->build(['controller' => 'Etatpaiements', 'action' => 'index']) ?> class="btn btn-warning btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-database"></i>
                </span>
                <span class="text">Gestion des états de paiements</span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">




    <!-- Content Row -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des paiements</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('client_id') ?></th>
                            <th><?= $this->Paginator->sort('souscription_id') ?></th>
                            <th><?= $this->Paginator->sort('offre_id') ?></th>
                            <th><?= $this->Paginator->sort('datepaiement') ?></th>
                            <th><?= $this->Paginator->sort('etatpaiement_id') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('client_id') ?></th>
                            <th><?= $this->Paginator->sort('souscription_id') ?></th>
                            <th><?= $this->Paginator->sort('offre_id') ?></th>
                            <th><?= $this->Paginator->sort('datepaiement') ?></th>
                            <th><?= $this->Paginator->sort('etatpaiement_id') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($paiements as $paiement) : ?>
                            <tr>
                                <td><?= $this->Number->format($paiement->id) ?></td>
                                <td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
                                <td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
                                <td><?= $paiement->has('offre') ? $this->Html->link($paiement->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiement->offre->id]) : '' ?></td>
                                <td><?= h($paiement->datepaiement) ?></td>
                                <td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
                                <td><?= h($paiement->created) ?></td>
                                <td><?= h($paiement->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $paiement->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paiement->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>