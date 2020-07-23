<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offre[]|\Cake\Collection\CollectionInterface $offres
 */
?>
<!--<div class="offres index content">
    <?= $this->Html->link(__('New Offre'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Offres') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($offres as $offre) : ?>
                <tr>
                    <td><?= $this->Number->format($offre->id) ?></td>
                    <td><?= h($offre->name) ?></td>
                    <td><?= $this->Number->format($offre->prix) ?></td>
                    <td><?= h($offre->created) ?></td>
                    <td><?= h($offre->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $offre->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offre->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offre->id)]) ?>
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
</div>-->


<?= $this->element('header'); ?>
<?= $this->element('slider'); ?>



<section id="content">
    <div class="container">
        <!--<div class="row">
            <div class="span12">
                <h4><strong>NOS OFFRES</strong></h4>
            </div>-->
    </div>
    <!-- divider -->
    <div class="row">
        <div class="span12">
            <div class="solidline">
            </div>
        </div>
    </div>
    <!-- end divider -->

    <div class="row">

        <div class="span12">
            <h4><strong>OFFRES SMART PROTECT</strong></h4>
        </div>
        <?php foreach ($offres as $offre) : ?>
            <div class="span4">
                <div class="pricing-box-alt">
                    <div class="pricing-heading">
                        <h3><strong><?= @h($offre->name) ?></strong></h3>
                        <h6><?= $this->Number->format($offre->prix) ?> FCFA / Mois</h6>
                    </div>
                    <div class="pricing-terms">
                        <h6>Matériels inclus</h6>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <?php foreach ($offre->materielinclus as $key => $materielinclus) : ?>
                                <li><i class="icon-ok"></i><?= @h($materielinclus->name) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="pricing-terms">
                        <h6>Services inclus</h6>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <?php foreach ($offre->serviceinclus as $key => $serviceinclus) : ?>
                                <li><i class="icon-ok"></i><?= @h($serviceinclus->name) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="pricing-action">
                        <a href="<?= $this->Url->build(['controller' => 'Souscriptions', 'action' => 'souscrire', $offre->id]); ?>" class="btn btn-medium btn-theme"><i class="icon-bolt"></i>Souscrire</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- divider -->
        <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->
    </div>

    </div>
</section>





<?= $this->element('footer'); ?>