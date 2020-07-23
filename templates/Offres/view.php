<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre $offre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Offre'), ['action' => 'edit', $offre->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Offre'), ['action' => 'delete', $offre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offre->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Offres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Offre'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offres view content">
            <h3><?= h($offre->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($offre->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($offre->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= $this->Number->format($offre->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($offre->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($offre->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($offre->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Materielinclus') ?></h4>
                <?php if (!empty($offre->materielinclus)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Offre Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offre->materielinclus as $materielinclus) : ?>
                        <tr>
                            <td><?= h($materielinclus->id) ?></td>
                            <td><?= h($materielinclus->offre_id) ?></td>
                            <td><?= h($materielinclus->name) ?></td>
                            <td><?= h($materielinclus->created) ?></td>
                            <td><?= h($materielinclus->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Materielinclus', 'action' => 'view', $materielinclus->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Materielinclus', 'action' => 'edit', $materielinclus->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materielinclus', 'action' => 'delete', $materielinclus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materielinclus->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Paiements') ?></h4>
                <?php if (!empty($offre->paiements)) : ?>
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
                        <?php foreach ($offre->paiements as $paiements) : ?>
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
            <div class="related">
                <h4><?= __('Related Serviceinclus') ?></h4>
                <?php if (!empty($offre->serviceinclus)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Is') ?></th>
                            <th><?= __('Offre Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offre->serviceinclus as $serviceinclus) : ?>
                        <tr>
                            <td><?= h($serviceinclus->is) ?></td>
                            <td><?= h($serviceinclus->offre_id) ?></td>
                            <td><?= h($serviceinclus->name) ?></td>
                            <td><?= h($serviceinclus->created) ?></td>
                            <td><?= h($serviceinclus->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Serviceinclus', 'action' => 'view', $serviceinclus->is]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Serviceinclus', 'action' => 'edit', $serviceinclus->is]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Serviceinclus', 'action' => 'delete', $serviceinclus->is], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceinclus->is)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Souscriptions') ?></h4>
                <?php if (!empty($offre->souscriptions)) : ?>
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
                        <?php foreach ($offre->souscriptions as $souscriptions) : ?>
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
</div>
