<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serviceinclus[]|\Cake\Collection\CollectionInterface $serviceinclus
 */
?>
<div class="serviceinclus index content">
    <?= $this->Html->link(__('New Serviceinclus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Serviceinclus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('is') ?></th>
                    <th><?= $this->Paginator->sort('offre_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($serviceinclus as $serviceinclus): ?>
                <tr>
                    <td><?= $this->Number->format($serviceinclus->is) ?></td>
                    <td><?= $serviceinclus->has('offre') ? $this->Html->link($serviceinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $serviceinclus->offre->id]) : '' ?></td>
                    <td><?= h($serviceinclus->name) ?></td>
                    <td><?= h($serviceinclus->created) ?></td>
                    <td><?= h($serviceinclus->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $serviceinclus->is]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceinclus->is]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceinclus->is], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceinclus->is)]) ?>
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
