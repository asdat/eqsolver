<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equations Model
 *
 * @property \App\Model\Table\ResultsTable|\Cake\ORM\Association\BelongsTo $Results
 * @property \App\Model\Table\ResultsTable|\Cake\ORM\Association\HasMany $Results
 *
 * @method \App\Model\Entity\Equation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equation|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equation findOrCreate($search, callable $callback = null, $options = [])
 */
class EquationsTable extends Table
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

        $this->setTable('equations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Results', [
            'foreignKey' => 'result_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Results', [
            'foreignKey' => 'equation_id'
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
            ->scalar('token')
            ->maxLength('token', 40)
            ->requirePresence('token', 'create')
            ->allowEmptyString('token', false);

        $validator
            ->integer('a')
            ->requirePresence('a', 'create')
            ->allowEmptyString('a', false);

        $validator
            ->integer('b')
            ->requirePresence('b', 'create')
            ->allowEmptyString('b', false);

        $validator
            ->integer('c')
            ->requirePresence('c', 'create')
            ->allowEmptyString('c', false);

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
        $rules->add($rules->existsIn(['result_id'], 'Results'));

        return $rules;
    }
}
