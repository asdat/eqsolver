<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Results Model
 *
 * @property \App\Model\Table\ResultTypesTable|\Cake\ORM\Association\BelongsTo $ResultTypes
 * @property \App\Model\Table\EquationsTable|\Cake\ORM\Association\BelongsTo $Equations
 * @property \App\Model\Table\EquationsTable|\Cake\ORM\Association\HasMany $Equations
 *
 * @method \App\Model\Entity\Result get($primaryKey, $options = [])
 * @method \App\Model\Entity\Result newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Result[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Result|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Result|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Result patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Result[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Result findOrCreate($search, callable $callback = null, $options = [])
 */
class ResultsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('results');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ResultTypes', [
            'foreignKey' => 'result_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Equations', [
            'foreignKey' => 'equation_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Equations', [
            'foreignKey' => 'result_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->numeric('x1')
            ->requirePresence('x1', 'create')
            ->allowEmptyString('x1', false);

        $validator
            ->numeric('x2')
            ->requirePresence('x2', 'create')
            ->allowEmptyString('x2', false);

        $validator
            ->scalar('message')
            ->maxLength('message', 200)
            ->requirePresence('message', 'create')
            ->allowEmptyString('message', false);

        $validator
            ->integer('count')
            ->requirePresence('count', 'create')
            ->allowEmptyString('count', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['result_type_id'], 'ResultTypes'));
        $rules->add($rules->existsIn(['equation_id'], 'Equations'));

        return $rules;
    }
}
