<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commentaire Entity
 *
 * @property int $id
 * @property string|null $comment
 * @property string|null $article_id
 * @property string|null $client_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Article $article
 * @property \App\Model\Entity\Client $client
 */
class Commentaire extends Entity
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
        'comment' => true,
        'article_id' => true,
        'client_id' => true,
        'created' => true,
        'modified' => true,
        'article' => true,
        'client' => true,
    ];
}
