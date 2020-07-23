<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscription[]|\Cake\Collection\CollectionInterface $souscriptions
 */
?>
<div class="souscriptions index content">
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
                <?php foreach ($souscriptions as $souscription): ?>
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
</div>
