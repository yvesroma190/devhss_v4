<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paiements Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\SouscriptionsTable&\Cake\ORM\Association\BelongsTo $Souscriptions
 * @property \App\Model\Table\OffresTable&\Cake\ORM\Association\BelongsTo $Offres
 * @property \App\Model\Table\EtatpaiementsTable&\Cake\ORM\Association\BelongsTo $Etatpaiements
 *
 * @method \App\Model\Entity\Paiement newEmptyEntity()
 * @method \App\Model\Entity\Paiement newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Paiement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paiement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paiement findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Paiement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paiement[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paiement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paiement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paiement[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Paiement[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Paiement[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Paiement[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PaiementsTable extends Table
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

        $this->setTable('paiements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->belongsTo('Souscriptions', [
            'foreignKey' => 'souscription_id',
        ]);
        $this->belongsTo('Offres', [
            'foreignKey' => 'offre_id',
        ]);
        $this->belongsTo('Etatpaiements', [
            'foreignKey' => 'etatpaiement_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('datepaiement')
            ->allowEmptyDate('datepaiement');

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
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['souscription_id'], 'Souscriptions'));
        $rules->add($rules->existsIn(['offre_id'], 'Offres'));
        $rules->add($rules->existsIn(['etatpaiement_id'], 'Etatpaiements'));

        return $rules;
    }
}
