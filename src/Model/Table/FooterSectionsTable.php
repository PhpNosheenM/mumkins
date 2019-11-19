<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FooterSections Model
 *
 * @method \App\Model\Entity\FooterSection get($primaryKey, $options = [])
 * @method \App\Model\Entity\FooterSection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FooterSection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FooterSection|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FooterSection saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FooterSection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FooterSection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FooterSection findOrCreate($search, callable $callback = null, $options = [])
 */
class FooterSectionsTable extends Table
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

        $this->setTable('footer_sections');
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
            ->scalar('show_on')
            ->maxLength('show_on', 100)
            ->requirePresence('show_on', 'create')
            ->notEmptyString('show_on');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('is_deleted')
            ->notEmptyString('is_deleted');

        $validator
            ->dateTime('created_on')
            ->notEmptyDateTime('created_on');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmptyString('created_by');

        $validator
            ->dateTime('edited_on')
            ->notEmptyDateTime('edited_on');

        $validator
            ->integer('edited_by')
            ->requirePresence('edited_by', 'create')
            ->notEmptyString('edited_by');

        return $validator;
    }
}
