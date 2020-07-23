<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription $souscription
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Souscription'), ['action' => 'edit', $souscription->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Souscription'), ['action' => 'delete', $souscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscription->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Souscriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Souscription'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="souscriptions view content">
            <h3><?= h($souscription->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $souscription->has('client') ? $this->Html->link($souscription->client->name, ['controller' => 'Clients', 'action' => 'view', $souscription->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Offre') ?></th>
                    <td><?= $souscription->has('offre') ? $this->Html->link($souscription->offre->name, ['controller' => 'Offres', 'action' => 'view', $souscription->offre->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Periode') ?></th>
                    <td><?= $souscription->has('periode') ? $this->Html->link($souscription->periode->name, ['controller' => 'Periodes', 'action' => 'view', $souscription->periode->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($souscription->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Montanttotal') ?></th>
                    <td><?= $this->Number->format($souscription->montanttotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datedebut') ?></th>
                    <td><?= h($souscription->datedebut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datefin') ?></th>
                    <td><?= h($souscription->datefin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($souscription->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($souscription->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Paiements') ?></h4>
                <?php if (!empty($souscription->paiements)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Souscription Id') ?></th>
                            <th><?= __('Offre Id') ?></th>
                            <th><?= __('Datepaiement') ?></th>
                            <th><?= __('Etatpaiement Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($souscription->paiements as $paiements) : ?>
                        <tr>
                            <td><?= h($paiements->id) ?></td>
                            <td><?= h($paiements->client_id) ?></td>
                            <td><?= h($paiements->souscription_id) ?></td>
                            <td><?= h($paiements->offre_id) ?></td>
                            <td><?= h($paiements->datepaiement) ?></td>
                            <td><?= h($paiements->etatpaiement_id) ?></td>
                            <td><?= h($paiements->created) ?></td>
                            <td><?= h($paiements->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Paiements', 'action' => 'view', $paiements->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Paiements', 'action' => 'edit', $paiements->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paiements', 'action' => 'delete', $paiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiements->id)]) ?>
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
