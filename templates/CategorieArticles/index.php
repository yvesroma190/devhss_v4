<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategorieArticle[]|\Cake\Collection\CollectionInterface $categorieArticles
 */
?>
<div class="categorieArticles index content">
    <?= $this->Html->link(__('New Categorie Article'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorie Articles') ?></h3>
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
                <?php foreach ($categorieArticles as $categorieArticle): ?>
                <tr>
                    <td><?= $this->Number->format($categorieArticle->id) ?></td>
                    <td><?= h($categorieArticle->name) ?></td>
                    <td><?= h($categorieArticle->created) ?></td>
                    <td><?= h($categorieArticle->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categorieArticle->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorieArticle->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorieArticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorieArticle->id)]) ?>
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
