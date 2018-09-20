<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fuels Model
 *
 * @property \App\Model\Table\CarsTable|\Cake\ORM\Association\HasMany $Cars
 *
 * @method \App\Model\Entity\Fuel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fuel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fuel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fuel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fuel|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fuel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fuel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fuel findOrCreate($search, callable $callback = null, $options = [])
 */
class FuelsTable extends Table
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

        $this->setTable('fuels');
        $this->setDisplayField('fuel_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Cars', [
            'foreignKey' => 'fuel_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('fuel_name')
            ->maxLength('fuel_name', 20)
            ->requirePresence('fuel_name', 'create')
            ->notEmpty('fuel_name');

        return $validator;
    }
}
