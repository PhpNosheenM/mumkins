<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItemImage Entity
 *
 * @property int $id
 * @property int $item_row_id
 * @property string $image_name
 * @property int $is_deleted
 *
 * @property \App\Model\Entity\ItemRow $item_row
 */
class ItemImage extends Entity
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
        'item_row_id' => true,
        'image_name' => true,
        'is_deleted' => true,
        'item_row' => true
    ];
}
