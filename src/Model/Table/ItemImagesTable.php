<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ItemImages Model
 *
 * @property \App\Model\Table\ItemRowsTable&\Cake\ORM\Association\BelongsTo $ItemRows
 *
 * @method \App\Model\Entity\ItemImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\ItemImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ItemImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ItemImage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ItemImage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ItemImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ItemImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ItemImage findOrCreate($search, callable $callback = null, $options = [])
 */
class ItemImagesTable extends Table
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

        $this->setTable('item_images');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ItemRows', [
            'foreignKey' => 'item_row_id',
            'joinType' => 'INNER'
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('image_name')
            ->maxLength('image_name', 255)
            ->requirePresence('image_name', 'create')
            ->notEmptyFile('image_name');

        $validator
            ->integer('is_deleted')
            ->notEmptyString('is_deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['item_row_id'], 'ItemRows'));

        return $rules;
    }
}
