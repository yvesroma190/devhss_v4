<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etatpaiement $etatpaiement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Etatpaiement'), ['action' => 'edit', $etatpaiement->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Etatpaiement'), ['action' => 'delete', $etatpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etatpaiement->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Etatpaiements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Etatpaiement'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="etatpaiements view content">
            <h3><?= h($etatpaiement->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($etatpaiement->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($etatpaiement->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($etatpaiement->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($etatpaiement->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Paiements') ?></h4>
                <?php if (!empty($etatpaiement->paiements)) : ?>
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
                        <?php foreach ($etatpaiement->paiements as $paiements) : ?>
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
