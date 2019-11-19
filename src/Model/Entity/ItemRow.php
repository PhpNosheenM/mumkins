<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItemRow Entity
 *
 * @property int $id
 * @property int $item_id
 * @property string $sku
 * @property int $color_id
 * @property int $size_id
 * @property int $quantity
 * @property float $sale_rate
 * @property float $print_rate
 * @property string $feature_image
 * @property int $flag
 * @property string $discount
 * @property string $stock
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\Color $color
 * @property \App\Model\Entity\Size $size
 * @property \App\Model\Entity\ItemImage[] $item_images
 */
class ItemRow extends Entity
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
        'item_id' => true,
        'sku' => true,
        'color_id' => true,
        'size_id' => true,
        'quantity' => true,
        'sale_rate' => true,
        'print_rate' => true,
        'feature_image' => true,
        'flag' => true,
        'discount' => true,
        'stock' => true,
        'item' => true,
        'color' => true,
        'size' => true,
        'item_images' => true
    ];
}
