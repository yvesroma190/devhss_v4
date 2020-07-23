<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materielinclus[]|\Cake\Collection\CollectionInterface $materielinclus
 */
?>
<div class="materielinclus index content">
    <?= $this->Html->link(__('New Materielinclus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Materielinclus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('offre_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materielinclus as $materielinclus): ?>
                <tr>
                    <td><?= $this->Number->format($materielinclus->id) ?></td>
                    <td><?= $materielinclus->has('offre') ? $this->Html->link($materielinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $materielinclus->offre->id]) : '' ?></td>
                    <td><?= h($materielinclus->name) ?></td>
                    <td><?= h($materielinclus->created) ?></td>
                    <td><?= h($materielinclus->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $materielinclus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materielinclus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materielinclus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materielinclus->id)]) ?>
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
