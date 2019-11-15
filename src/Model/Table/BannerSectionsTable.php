<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BannerSections Model
 *
 * @method \App\Model\Entity\BannerSection get($primaryKey, $options = [])
 * @method \App\Model\Entity\BannerSection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BannerSection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BannerSection|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BannerSection saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BannerSection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BannerSection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BannerSection findOrCreate($search, callable $callback = null, $options = [])
 */
class BannerSectionsTable extends Table
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

        $this->setTable('banner_sections');
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
            ->scalar('button1_text')
            ->maxLength('button1_text', 150)
            ->requirePresence('button1_text', 'create')
            ->notEmptyString('button1_text');

        $validator
            ->scalar('button2_text')
            ->maxLength('button2_text', 150)
            ->requirePresence('button2_text', 'create')
            ->notEmptyString('button2_text');

        $validator
            ->integer('is_deleted')
            ->notEmptyString('is_deleted');

        return $validator;
    }
}
