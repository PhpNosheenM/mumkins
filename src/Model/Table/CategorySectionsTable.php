<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategorySections Model
 *
 * @method \App\Model\Entity\CategorySection get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategorySection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategorySection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategorySection|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategorySection saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategorySection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategorySection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategorySection findOrCreate($search, callable $callback = null, $options = [])
 */
class CategorySectionsTable extends Table
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

        $this->setTable('category_sections');
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
