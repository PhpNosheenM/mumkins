<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderDetail Entity
 *
 * @property int $id
 * @property int $order_id
 * @property int $item_id
 * @property int $item_row_id
 * @property float $quantity
 * @property float $rate
 * @property float $amount
 * @property float $net_amount
 * @property string $status
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\ItemRow $item_row
 */
class OrderDetail extends Entity
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
        'order_id' => true,
        'item_id' => true,
        'item_row_id' => true,
        'quantity' => true,
        'rate' => true,
        'amount' => true,
        'net_amount' => true,
        'status' => true,
        'order' => true,
        'item' => true,
        'item_row' => true
    ];
}
