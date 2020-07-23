<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paiement Entity
 *
 * @property int $id
 * @property string|null $client_id
 * @property string|null $souscription_id
 * @property string|null $offre_id
 * @property \Cake\I18n\FrozenDate|null $datepaiement
 * @property string|null $etatpaiement_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Souscription $souscription
 * @property \App\Model\Entity\Offre $offre
 * @property \App\Model\Entity\Etatpaiement $etatpaiement
 */
class Paiement extends Entity
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
        'souscription_id' => true,
        'offre_id' => true,
        'datepaiement' => true,
        'etatpaiement_id' => true,
        'created' => true,
        'modified' => true,
        'client' => true,
        'souscription' => true,
        'offre' => true,
        'etatpaiement' => true,
    ];
}
