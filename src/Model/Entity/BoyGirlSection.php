<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BoyGirlSection Entity
 *
 * @property int $id
 * @property string $bg_image
 * @property string $bg_url
 * @property int $is_deleted
 */
class BoyGirlSection extends Entity
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
        'bg_image' => true,
        'bg_url' => true,
        'is_deleted' => true
    ];
}
