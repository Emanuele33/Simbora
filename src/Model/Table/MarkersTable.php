<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Markers Model
 *
 * @method \App\Model\Entity\Marker get($primaryKey, $options = [])
 * @method \App\Model\Entity\Marker newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Marker[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Marker|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Marker patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Marker[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Marker findOrCreate($search, callable $callback = null, $options = [])
 */
class MarkersTable extends Table
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

        $this->setTable('markers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->maxLength('name', 60)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 80)
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('dayweek')
            ->maxLength('dayweek', 100)
            ->requirePresence('dayweek', 'create')
            ->notEmpty('dayweek');

        $validator
            ->time('departuretime')
            ->requirePresence('departuretime', 'create')
            ->notEmpty('departuretime');

        $validator
            ->time('returntime')
            ->requirePresence('returntime', 'create')
            ->notEmpty('returntime');

        $validator
            ->scalar('destiny')
            ->maxLength('destiny', 100)
            ->requirePresence('destiny', 'create')
            ->notEmpty('destiny');

        return $validator;
    }
}
