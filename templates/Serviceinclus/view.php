<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Serviceinclus $serviceinclus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Serviceinclus'), ['action' => 'edit', $serviceinclus->is], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Serviceinclus'), ['action' => 'delete', $serviceinclus->is], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceinclus->is), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Serviceinclus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Serviceinclus'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="serviceinclus view content">
            <h3><?= h($serviceinclus->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Offre') ?></th>
                    <td><?= $serviceinclus->has('offre') ? $this->Html->link($serviceinclus->offre->name, ['controller' => 'Offres', 'action' => 'view', $serviceinclus->offre->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($serviceinclus->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is') ?></th>
                    <td><?= $this->Number->format($serviceinclus->is) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($serviceinclus->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($serviceinclus->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
