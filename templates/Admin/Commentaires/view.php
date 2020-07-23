<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commentaire $commentaire
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Commentaire'), ['action' => 'edit', $commentaire->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Commentaire'), ['action' => 'delete', $commentaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaire->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Commentaires'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Commentaire'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commentaires view content">
            <h3><?= h($commentaire->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $commentaire->has('article') ? $this->Html->link($commentaire->article->title, ['controller' => 'Articles', 'action' => 'view', $commentaire->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $commentaire->has('client') ? $this->Html->link($commentaire->client->name, ['controller' => 'Clients', 'action' => 'view', $commentaire->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($commentaire->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($commentaire->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($commentaire->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($commentaire->comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
