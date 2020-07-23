<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription[]|\Cake\Collection\CollectionInterface $souscriptions
 */
?>
<!--<div class="souscriptions index content">
    <?= $this->Html->link(__('New Souscription'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Souscriptions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('offre_id') ?></th>
                    <th><?= $this->Paginator->sort('periode_id') ?></th>
                    <th><?= $this->Paginator->sort('montanttotal') ?></th>
                    <th><?= $this->Paginator->sort('datedebut') ?></th>
                    <th><?= $this->Paginator->sort('datefin') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($souscriptions as $souscription) : ?>
                <tr>
                    <td><?= $this->Number->format($souscription->id) ?></td>
                    <td><?= $souscription->has('client') ? $this->Html->link($souscription->client->name, ['controller' => 'Clients', 'action' => 'view', $souscription->client->id]) : '' ?></td>
                    <td><?= $souscription->has('offre') ? $this->Html->link($souscription->offre->name, ['controller' => 'Offres', 'action' => 'view', $souscription->offre->id]) : '' ?></td>
                    <td><?= $souscription->has('periode') ? $this->Html->link($souscription->periode->name, ['controller' => 'Periodes', 'action' => 'view', $souscription->periode->id]) : '' ?></td>
                    <td><?= $this->Number->format($souscription->montanttotal) ?></td>
                    <td><?= h($souscription->datedebut) ?></td>
                    <td><?= h($souscription->datefin) ?></td>
                    <td><?= h($souscription->created) ?></td>
                    <td><?= h($souscription->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $souscription->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $souscription->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $souscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id)]) ?>
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
        <h1 class="h3 mb-0 text-gray-800">Etats des souscriptions</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <a href=<?= $this->Url->build(['controller' => 'Souscriptions', 'action' => 'add']) ?> class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Souscrir</span>
            </a>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Tableau -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des souscriptions</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('client_id') ?></th>
                            <th><?= $this->Paginator->sort('offre_id') ?></th>
                            <th><?= $this->Paginator->sort('periode_id') ?></th>
                            <th><?= $this->Paginator->sort('montant total') ?></th>
                            <th><?= $this->Paginator->sort('date debut') ?></th>
                            <th><?= $this->Paginator->sort('date fin') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('client_id') ?></th>
                            <th><?= $this->Paginator->sort('offre_id') ?></th>
                            <th><?= $this->Paginator->sort('periode_id') ?></th>
                            <th><?= $this->Paginator->sort('montant total') ?></th>
                            <th><?= $this->Paginator->sort('date debut') ?></th>
                            <th><?= $this->Paginator->sort('date fin') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($souscriptions as $souscription) : ?>
                            <tr>
                                <td><?= $this->Number->format($souscription->id) ?></td>
                                <td><?= $souscription->has('client') ? $this->Html->link($souscription->client->name, ['controller' => 'Clients', 'action' => 'view', $souscription->client->id]) : '' ?></td>
                                <td><?= $souscription->has('offre') ? $this->Html->link($souscription->offre->name, ['controller' => 'Offres', 'action' => 'view', $souscription->offre->id]) : '' ?></td>
                                <td><?= $souscription->has('periode') ? $this->Html->link($souscription->periode->name, ['controller' => 'Periodes', 'action' => 'view', $souscription->periode->id]) : '' ?></td>
                                <td><?= $this->Number->format($souscription->montanttotal) ?></td>
                                <td><?= h($souscription->datedebut) ?></td>
                                <td><?= h($souscription->datefin) ?></td>
                                <td><?= h($souscription->created) ?></td>
                                <td><?= h($souscription->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('Détails'), ['action' => 'view', $souscription->id]) ?>
                                    <!--<?= $this->Html->link(__('Modifier'), ['action' => 'edit', $souscription->id]) ?>-->
                                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $souscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>