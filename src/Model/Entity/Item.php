<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int $category_id
 * @property string $style_no
 * @property string $name
 * @property string $material_type
 * @property string $description
 * @property string $specification
 * @property string $item_keyword
 * @property int $is_deleted
 * @property \Cake\I18n\FrozenTime $created_on
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $edited_on
 * @property int $edited_by
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\ItemRow[] $item_rows
 * @property \App\Model\Entity\ProductSection[] $product_sections
 */
class Item extends Entity
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
        'category_id' => true,
        'style_no' => true,
        'name' => true,
        'material_type' => true,
        'description' => true,
        'specification' => true,
        'item_keyword' => true,
        'is_deleted' => true,
        'created_on' => true,
        'created_by' => true,
        'edited_on' => true,
        'edited_by' => true,
        'category' => true,
        'item_rows' => true,
        'item_tag' => true,
        'product_sections' => true
    ];
}
