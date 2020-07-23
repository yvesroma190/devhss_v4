<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement $paiement
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Paiement'), ['action' => 'edit', $paiement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Paiement'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Paiements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Paiement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paiements view content">
            <h3><?= h($paiement->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Souscription') ?></th>
                    <td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Offre') ?></th>
                    <td><?= $paiement->has('offre') ? $this->Html->link($paiement->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiement->offre->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Etatpaiement') ?></th>
                    <td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($paiement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datepaiement') ?></th>
                    <td><?= h($paiement->datepaiement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($paiement->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($paiement->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>-->



<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des paiements</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Liste des paiements'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <!--<?= $this->Html->link(__('Ajouter une Offre'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $paiement->id], ['class' => 'btn btn-success']) ?>-->
            <?= $this->Form->postLink(__('Supprimer cet paiement'), ['action' => 'delete', $paiement->id], ['confirm' => __('Voulez-vous supprimer le paiement? # {0}?', $offre->id), 'class' => 'btn btn-danger']) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($paiement->name) ?></h6>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $paiement->has('client') ? $this->Html->link($paiement->client->name, ['controller' => 'Clients', 'action' => 'view', $paiement->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Souscription') ?></th>
                    <td><?= $paiement->has('souscription') ? $this->Html->link($paiement->souscription->id, ['controller' => 'Souscriptions', 'action' => 'view', $paiement->souscription->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Offre') ?></th>
                    <td><?= $paiement->has('offre') ? $this->Html->link($paiement->offre->name, ['controller' => 'Offres', 'action' => 'view', $paiement->offre->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Etatpaiement') ?></th>
                    <td><?= $paiement->has('etatpaiement') ? $this->Html->link($paiement->etatpaiement->name, ['controller' => 'Etatpaiements', 'action' => 'view', $paiement->etatpaiement->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($paiement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datepaiement') ?></th>
                    <td><?= h($paiement->datepaiement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($paiement->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($paiement->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>


</div>