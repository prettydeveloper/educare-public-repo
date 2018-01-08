<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Observators Model
 *
 * @method \App\Model\Entity\Observator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Observator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Observator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Observator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Observator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Observator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Observator findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ObservatorsTable extends Table
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

        $this->setTable('observators');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 127)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->date('observation_date')
            ->allowEmpty('observation_date');

        $validator
            ->integer('created_by')
            ->allowEmpty('created_by');

        $validator
            ->integer('modified_by')
            ->allowEmpty('modified_by');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $validator
            ->scalar('notes')
            ->maxLength('notes', 255)
            ->allowEmpty('notes');
        $validator
            ->integer('testob')
            ->allowEmpty('testob');


        return $validator;
    }
}
