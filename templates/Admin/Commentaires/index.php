<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commentaire[]|\Cake\Collection\CollectionInterface $commentaires
 */
?>
<div class="commentaires index content">
    <?= $this->Html->link(__('New Commentaire'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Commentaires') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commentaires as $commentaire): ?>
                <tr>
                    <td><?= $this->Number->format($commentaire->id) ?></td>
                    <td><?= $commentaire->has('article') ? $this->Html->link($commentaire->article->title, ['controller' => 'Articles', 'action' => 'view', $commentaire->article->id]) : '' ?></td>
                    <td><?= $commentaire->has('client') ? $this->Html->link($commentaire->client->name, ['controller' => 'Clients', 'action' => 'view', $commentaire->client->id]) : '' ?></td>
                    <td><?= h($commentaire->created) ?></td>
                    <td><?= h($commentaire->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $commentaire->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commentaire->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commentaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaire->id)]) ?>
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
