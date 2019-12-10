<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CustomerAddressesTable&\Cake\ORM\Association\BelongsTo $CustomerAddresses
 * @property \App\Model\Table\DeliveryChargesTable&\Cake\ORM\Association\BelongsTo $DeliveryCharges
 * @property \App\Model\Table\PromoCodesTable&\Cake\ORM\Association\BelongsTo $PromoCodes
 * @property \App\Model\Table\TrackingsTable&\Cake\ORM\Association\BelongsTo $Trackings
 * @property \App\Model\Table\OrderDetailsTable&\Cake\ORM\Association\HasMany $OrderDetails
 *
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, callable $callback = null, $options = [])
 */
class OrdersTable extends Table
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

        $this->setTable('orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CustomerAddresses', [
            'foreignKey' => 'customer_address_id'
        ]);
        $this->belongsTo('DeliveryCharges', [
            'foreignKey' => 'delivery_charge_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PromoCodes', [
            'foreignKey' => 'promo_code_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Trackings', [
            'foreignKey' => 'tracking_id'
        ]);
         $this->belongsTo('Warehouses', [
            'foreignKey' => 'warehouses_id'
        ]);
        $this->hasMany('OrderDetails', [
            'foreignKey' => 'order_id'
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
            ->scalar('transaction_order_no')
            ->maxLength('transaction_order_no', 2000)
            ->requirePresence('transaction_order_no', 'create')
            ->notEmptyString('transaction_order_no');

        $validator
            ->scalar('order_no')
            ->maxLength('order_no', 2000)
            ->requirePresence('order_no', 'create')
            ->notEmptyString('order_no');

        $validator
            ->integer('amount_from_promo_code')
            ->allowEmptyString('amount_from_promo_code');

        $validator
            ->integer('total_amount')
            ->requirePresence('total_amount', 'create')
            ->notEmptyString('total_amount');

        $validator
            ->integer('grand_total')
            ->requirePresence('grand_total', 'create')
            ->notEmptyString('grand_total');

        $validator
            ->integer('pay_amount')
            ->requirePresence('pay_amount', 'create')
            ->notEmptyString('pay_amount');

        $validator
            ->integer('online_amount')
            ->requirePresence('online_amount', 'create')
            ->notEmptyString('online_amount');

        $validator
            ->integer('delivery_charge')
            ->requirePresence('delivery_charge', 'create')
            ->notEmptyString('delivery_charge');

        $validator
            ->scalar('payment_type')
            ->maxLength('payment_type', 30)
            ->requirePresence('payment_type', 'create')
            ->notEmptyString('payment_type');

        $validator
            ->dateTime('delivery_date')
            ->notEmptyDateTime('delivery_date');

        $validator
            ->scalar('actual_deliver_time')
            ->maxLength('actual_deliver_time', 50)
            ->allowEmptyString('actual_deliver_time');

        $validator
            ->scalar('delivery_time')
            ->maxLength('delivery_time', 255)
            ->requirePresence('delivery_time', 'create')
            ->notEmptyString('delivery_time');

        $validator
            ->scalar('order_status')
            ->maxLength('order_status', 30)
            ->notEmptyString('order_status');

        $validator
            ->date('current_date')
            ->requirePresence('current_date', 'create')
            ->notEmptyDate('current_date');

        $validator
            ->scalar('payment_status')
            ->maxLength('payment_status', 255)
            ->requirePresence('payment_status', 'create')
            ->notEmptyString('payment_status');

        $validator
            ->scalar('order_from')
            ->maxLength('order_from', 255)
            ->requirePresence('order_from', 'create')
            ->notEmptyString('order_from');

        $validator
            ->dateTime('order_date')
            ->notEmptyDateTime('order_date');

        $validator
            ->scalar('order_time')
            ->requirePresence('order_time', 'create')
            ->notEmptyString('order_time');

        $validator
            ->date('cancel_date')
            ->allowEmptyDate('cancel_date');

        $validator
            ->scalar('cancel_from')
            ->maxLength('cancel_from', 30)
            ->allowEmptyString('cancel_from');

        $validator
            ->scalar('reason_of_cancel')
            ->maxLength('reason_of_cancel', 50)
            ->allowEmptyString('reason_of_cancel');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['customer_address_id'], 'CustomerAddresses'));
        $rules->add($rules->existsIn(['delivery_charge_id'], 'DeliveryCharges'));
        $rules->add($rules->existsIn(['promo_code_id'], 'PromoCodes'));
        $rules->add($rules->existsIn(['tracking_id'], 'Trackings'));

        return $rules;
    }
}
