<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Makes Model
 *
 * @property \App\Model\Table\CarsTable|\Cake\ORM\Association\HasMany $Cars
 * @property \App\Model\Table\ModelsTable|\Cake\ORM\Association\HasMany $Models
 *
 * @method \App\Model\Entity\Make get($primaryKey, $options = [])
 * @method \App\Model\Entity\Make newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Make[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Make|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Make|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Make patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Make[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Make findOrCreate($search, callable $callback = null, $options = [])
 */
class MakesTable extends Table
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

        $this->setTable('makes');
        $this->setDisplayField('make_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Cars', [
            'foreignKey' => 'make_id'
        ]);
        $this->hasMany('Models', [
            'foreignKey' => 'make_id'
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
            ->scalar('make_name')
            ->maxLength('make_name', 20)
            ->requirePresence('make_name', 'create')
            ->notEmpty('make_name');

        return $validator;
    }
}
