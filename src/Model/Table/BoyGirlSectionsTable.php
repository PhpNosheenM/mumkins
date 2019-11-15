<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BoyGirlSections Model
 *
 * @method \App\Model\Entity\BoyGirlSection get($primaryKey, $options = [])
 * @method \App\Model\Entity\BoyGirlSection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BoyGirlSection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BoyGirlSection|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BoyGirlSection saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BoyGirlSection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BoyGirlSection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BoyGirlSection findOrCreate($search, callable $callback = null, $options = [])
 */
class BoyGirlSectionsTable extends Table
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

        $this->setTable('boy_girl_sections');
        $this->setDisplayField('id');
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
            ->allowEmptyString('id', null, 'create');


        $validator
            ->integer('is_deleted')
            ->notEmptyString('is_deleted');

        return $validator;
    }
}
