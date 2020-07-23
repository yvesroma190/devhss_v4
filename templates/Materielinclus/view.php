<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materielinclus $materielinclus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Materielinclus'), ['action' => 'edit', $materielinclus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Materielinclus'), ['action' => 'delete', $materielinclus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materielinclus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Materielinclus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Materielinclus'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materielinclus view content">
            <h3><?= h($materielinclus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Offre') ?></th>
                    <td><?= $materielinclus->has('offre') ? $this->Html->link($materielinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $materielinclus->offre->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($materielinclus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($materielinclus->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($materielinclus->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($materielinclus->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
