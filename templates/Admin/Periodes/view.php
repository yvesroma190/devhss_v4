<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periode $periode
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Periode'), ['action' => 'edit', $periode->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Periode'), ['action' => 'delete', $periode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periode->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Periodes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Periode'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="periodes view content">
            <h3><?= h($periode->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($periode->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($periode->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbmois') ?></th>
                    <td><?= $this->Number->format($periode->nbmois) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($periode->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($periode->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Souscriptions') ?></h4>
                <?php if (!empty($periode->souscriptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Offre Id') ?></th>
                            <th><?= __('Periode Id') ?></th>
                            <th><?= __('Montanttotal') ?></th>
                            <th><?= __('Datedebut') ?></th>
                            <th><?= __('Datefin') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($periode->souscriptions as $souscriptions) : ?>
                        <tr>
                            <td><?= h($souscriptions->id) ?></td>
                            <td><?= h($souscriptions->client_id) ?></td>
                            <td><?= h($souscriptions->offre_id) ?></td>
                            <td><?= h($souscriptions->periode_id) ?></td>
                            <td><?= h($souscriptions->montanttotal) ?></td>
                            <td><?= h($souscriptions->datedebut) ?></td>
                            <td><?= h($souscriptions->datefin) ?></td>
                            <td><?= h($souscriptions->created) ?></td>
                            <td><?= h($souscriptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Souscriptions', 'action' => 'view', $souscriptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptions', 'action' => 'edit', $souscriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptions', 'action' => 'delete', $souscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>-->


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestion des offres</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sous Menu -->
    <div class="row">
        <div class="lg-12">
            <?= $this->Html->link(__('Liste des périodes'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Ajouter une période'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifer'), ['action' => 'edit', $periode->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $periode->id], ['confirm' => __('Voulez-vous supprimer la période? # {0}?', $periode->id), 'class' => 'btn btn-danger']) ?>
        </div>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($periode->name) ?></h6>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($periode->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($periode->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbmois') ?></th>
                    <td><?= $this->Number->format($periode->nbmois) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($periode->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($periode->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Souscriptions') ?></h4>
                <?php if (!empty($periode->souscriptions)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Client Id') ?></th>
                                <th><?= __('Offre Id') ?></th>
                                <th><?= __('Periode Id') ?></th>
                                <th><?= __('Montanttotal') ?></th>
                                <th><?= __('Datedebut') ?></th>
                                <th><?= __('Datefin') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($periode->souscriptions as $souscriptions) : ?>
                                <tr>
                                    <td><?= h($souscriptions->id) ?></td>
                                    <td><?= h($souscriptions->client_id) ?></td>
                                    <td><?= h($souscriptions->offre_id) ?></td>
                                    <td><?= h($souscriptions->periode_id) ?></td>
                                    <td><?= h($souscriptions->montanttotal) ?></td>
                                    <td><?= h($souscriptions->datedebut) ?></td>
                                    <td><?= h($souscriptions->datefin) ?></td>
                                    <td><?= h($souscriptions->created) ?></td>
                                    <td><?= h($souscriptions->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Détails'), ['controller' => 'Souscriptions', 'action' => 'view', $souscriptions->id]) ?>
                                        <?= $this->Html->link(__('Modifier'), ['controller' => 'Souscriptions', 'action' => 'edit', $souscriptions->id]) ?>
                                        <?= $this->Form->postLink(__('Supprimer'), ['controller' => 'Souscriptions', 'action' => 'delete', $souscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptions->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>