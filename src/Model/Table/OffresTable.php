<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offres Model
 *
 * @property \App\Model\Table\MaterielinclusTable&\Cake\ORM\Association\HasMany $Materielinclus
 * @property \App\Model\Table\PaiementsTable&\Cake\ORM\Association\HasMany $Paiements
 * @property \App\Model\Table\ServiceinclusTable&\Cake\ORM\Association\HasMany $Serviceinclus
 * @property \App\Model\Table\SouscriptionsTable&\Cake\ORM\Association\HasMany $Souscriptions
 *
 * @method \App\Model\Entity\Offre newEmptyEntity()
 * @method \App\Model\Entity\Offre newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Offre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Offre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Offre findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Offre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Offre[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Offre|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offre[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Offre[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Offre[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Offre[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OffresTable extends Table
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

        $this->setTable('offres');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Materielinclus', [
            'foreignKey' => 'offre_id',
        ]);
        $this->hasMany('Paiements', [
            'foreignKey' => 'offre_id',
        ]);
        $this->hasMany('Serviceinclus', [
            'foreignKey' => 'offre_id',
        ]);
        $this->hasMany('Souscriptions', [
            'foreignKey' => 'offre_id',
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
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->numeric('prix')
            ->allowEmptyString('prix');

        $validator
            ->scalar('description')
            ->maxLength('description', 4294967295)
            ->allowEmptyString('description');

        return $validator;
    }
}
