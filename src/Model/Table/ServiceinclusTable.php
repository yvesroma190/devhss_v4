<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Serviceinclus Model
 *
 * @property \App\Model\Table\OffresTable&\Cake\ORM\Association\BelongsTo $Offres
 *
 * @method \App\Model\Entity\Serviceinclus newEmptyEntity()
 * @method \App\Model\Entity\Serviceinclus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Serviceinclus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Serviceinclus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Serviceinclus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Serviceinclus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Serviceinclus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Serviceinclus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Serviceinclus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Serviceinclus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Serviceinclus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Serviceinclus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Serviceinclus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ServiceinclusTable extends Table
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

        $this->setTable('serviceinclus');
        $this->setDisplayField('name');
        $this->setPrimaryKey('is');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Offres', [
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
            ->integer('is')
            ->allowEmptyString('is', null, 'create')
            ->add('is', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['is']));
        $rules->add($rules->existsIn(['offre_id'], 'Offres'));

        return $rules;
    }
}
