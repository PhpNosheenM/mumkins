<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Homes Model
 *
 * @method \App\Model\Entity\Home get($primaryKey, $options = [])
 * @method \App\Model\Entity\Home newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Home[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Home|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Home saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Home patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Home[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Home findOrCreate($search, callable $callback = null, $options = [])
 */
class HomesTable extends Table
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

        $this->setTable('homes');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
		
		 $this->belongsTo('BannerSections'); 
		 $this->belongsTo('BoyGirlSections'); 
		 $this->belongsTo('CategorySections');
		 $this->belongsTo('NewsletterSections');
		 $this->belongsTo('OfferSections');
		 $this->belongsTo('ProductSections');
		 $this->belongsTo('SliderSections');
		 $this->belongsTo('FooterSections');
		 $this->belongsTo('Newsletters');
		 
		 
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
            ->scalar('title')
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('layout')
            ->maxLength('layout', 255)
            ->requirePresence('layout', 'create')
            ->notEmptyString('layout');

        $validator
            ->integer('flag')
            ->notEmptyString('flag');

        return $validator;
    }
}
