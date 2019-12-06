<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cart Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int $item_id
 * @property int $item_row_id
 * @property float $quantity
 * @property float $rate
 * @property float $amount
 * @property int $cart_count
 * @property \Cake\I18n\FrozenTime $created_on
 * @property string|null $add_from
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\ItemRow $item_row
 */
class Cart extends Entity
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
        'customer_id' => true,
        'item_id' => true,
        'item_row_id' => true,
        'quantity' => true,
        'rate' => true,
        'amount' => true,
        'cart_count' => true,
        'created_on' => true,
        'add_from' => true,
        'customer' => true,
        'item' => true,
        'item_row' => true
    ];
}
