<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FooterSection Entity
 *
 * @property int $id
 * @property string $show_on
 * @property string $description
 * @property int $is_deleted
 * @property \Cake\I18n\FrozenTime $created_on
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $edited_on
 * @property int $edited_by
 */
class FooterSection extends Entity
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
        'show_on' => true,
        'description' => true,
        'is_deleted' => true,
        'created_on' => true,
        'created_by' => true,
        'edited_on' => true,
        'edited_by' => true
    ];
}
