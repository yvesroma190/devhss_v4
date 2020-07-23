<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etatpaiement[]|\Cake\Collection\CollectionInterface $etatpaiements
 */
?>
<div class="etatpaiements index content">
    <?= $this->Html->link(__('New Etatpaiement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Etatpaiements') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etatpaiements as $etatpaiement): ?>
                <tr>
                    <td><?= $this->Number->format($etatpaiement->id) ?></td>
                    <td><?= h($etatpaiement->name) ?></td>
                    <td><?= h($etatpaiement->created) ?></td>
                    <td><?= h($etatpaiement->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $etatpaiement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etatpaiement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etatpaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etatpaiement->id)]) ?>
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
