<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \App\Model\Table\CommentairesTable&\Cake\ORM\Association\HasMany $Commentaires
 * @property \App\Model\Table\PaiementsTable&\Cake\ORM\Association\HasMany $Paiements
 * @property \App\Model\Table\SouscriptionsTable&\Cake\ORM\Association\HasMany $Souscriptions
 *
 * @method \App\Model\Entity\Client newEmptyEntity()
 * @method \App\Model\Entity\Client newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('clients');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Commentaires', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Paiements', [
            'foreignKey' => 'client_id',
        ]);
        $this->hasMany('Souscriptions', [
            'foreignKey' => 'client_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 45)
            ->allowEmptyString('password');

        $validator
            ->scalar('cel')
            ->maxLength('cel', 45)
            ->allowEmptyString('cel');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 45)
            ->allowEmptyString('tel');

        $validator
            ->scalar('web')
            ->maxLength('web', 45)
            ->allowEmptyString('web');

        $validator
            ->scalar('bp')
            ->maxLength('bp', 45)
            ->allowEmptyString('bp');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 45)
            ->allowEmptyString('adresse');

        $validator
            ->scalar('localisation_site')
            ->maxLength('localisation_site', 4294967295)
            ->allowEmptyString('localisation_site');

        return $validator;
    }
}
