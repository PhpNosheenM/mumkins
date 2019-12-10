<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $transaction_order_no
 * @property string $order_no
 * @property int $customer_id
 * @property int|null $customer_address_id
 * @property int|null $amount_from_promo_code
 * @property int $total_amount
 * @property int $grand_total
 * @property int $pay_amount
 * @property int $online_amount
 * @property int $delivery_charge_id
 * @property int $promo_code_id
 * @property string $payment_type
 * @property \Cake\I18n\FrozenTime $delivery_date
 * @property string|null $actual_deliver_time
 * @property string $delivery_time
 * @property string $order_status
 * @property \Cake\I18n\FrozenDate $current_date
 * @property string $payment_status
 * @property string $order_from
 * @property \Cake\I18n\FrozenTime $order_date
 * @property string $order_time
 * @property \Cake\I18n\FrozenDate|null $cancel_date
 * @property string|null $cancel_from
 * @property string|null $reason_of_cancel
 * @property string|null $tracking_id
 *
 * @property \App\Model\Entity\DeliveryCharge $delivery_charge
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\CustomerAddress $customer_address
 * @property \App\Model\Entity\PromoCode $promo_code
 * @property \App\Model\Entity\Tracking $tracking
 * @property \App\Model\Entity\OrderDetail[] $order_details
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'transaction_order_no' => true,
        'order_no' => true,
        'customer_id' => true,
        'customer_address_id' => true,
        'amount_from_promo_code' => true,
        'total_amount' => true,
        'grand_total' => true,
        'pay_amount' => true,
        'online_amount' => true,
        'delivery_charge' => true,
        'delivery_charge_id' => true,
        'promo_code_id' => true,
        'payment_type' => true,
        'delivery_date' => true,
        'actual_deliver_time' => true,
        'delivery_time' => true,
        'order_status' => true,
        'current_date' => true,
        'payment_status' => true,
        'order_from' => true,
        'order_date' => true,
        'order_time' => true,
        'cancel_date' => true,
        'cancel_from' => true,
        'reason_of_cancel' => true,
        'tracking_id' => true,
        'customer' => true,
        'customer_address' => true,
        'promo_code' => true,
        'tracking' => true,
        'warehouses_id' => true,
        'order_details' => true
    ];
}
