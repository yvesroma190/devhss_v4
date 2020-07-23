<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offre Entity
 *
 * @property int $id
 * @property string|null $name
 * @property float|null $prix
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Materielinclus[] $materielinclus
 * @property \App\Model\Entity\Paiement[] $paiements
 * @property \App\Model\Entity\Serviceinclus[] $serviceinclus
 * @property \App\Model\Entity\Souscription[] $souscriptions
 */
class Offre extends Entity
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
        'name' => true,
        'prix' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'materielinclus' => true,
        'paiements' => true,
        'serviceinclus' => true,
        'souscriptions' => true,
    ];
}
