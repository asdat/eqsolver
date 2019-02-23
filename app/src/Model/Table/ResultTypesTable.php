<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ResultTypes Model
 *
 * @property \App\Model\Table\ResultsTable|\Cake\ORM\Association\HasMany $Results
 *
 * @method \App\Model\Entity\ResultType get($primaryKey, $options = [])
 * @method \App\Model\Entity\ResultType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ResultType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ResultType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResultType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResultType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ResultType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ResultType findOrCreate($search, callable $callback = null, $options = [])
 */
class ResultTypesTable extends Table
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

        $this->setTable('result_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Results', [
            'foreignKey' => 'result_type_id'
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
            ->scalar('name')
            ->maxLength('name', 30)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        return $validator;
    }
}
