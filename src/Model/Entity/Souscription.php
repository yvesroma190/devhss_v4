<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Souscription Entity
 *
 * @property int $id
 * @property string|null $client_id
 * @property string|null $offre_id
 * @property string|null $periode_id
 * @property float|null $montanttotal
 * @property \Cake\I18n\FrozenDate|null $datedebut
 * @property \Cake\I18n\FrozenDate|null $datefin
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Offre $offre
 * @property \App\Model\Entity\Periode $periode
 * @property \App\Model\Entity\Paiement[] $paiements
 */
class Souscription extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'client_id' => true,
        'offre_id' => true,
        'periode_id' => true,
        'montanttotal' => true,
        'datedebut' => true,
        'datefin' => true,
        'created' => true,
        'modified' => true,
        'client' => true,
        'offre' => true,
        'periode' => true,
        'paiements' => true,
    ];
}
