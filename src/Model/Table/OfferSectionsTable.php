<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfferSections Model
 *
 * @method \App\Model\Entity\OfferSection get($primaryKey, $options = [])
 * @method \App\Model\Entity\OfferSection newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\OfferSection[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OfferSection|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfferSection saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OfferSection patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OfferSection[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\OfferSection findOrCreate($search, callable $callback = null, $options = [])
 */
class OfferSectionsTable extends Table
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

        $this->setTable('offer_sections');
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
