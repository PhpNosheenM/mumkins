<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SliderSection Entity
 *
 * @property int $id
 * @property string $slider_image
 * @property int $button_text
 * @property string $slider_url
 * @property int $is_deleted
 */
class SliderSection extends Entity
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
        'slider_image' => true,
        'button_text' => true,
        'slider_url' => true,
        'slider2_url' => true,
        'button2_text' => true,
        'title' => true,
        'description' => true,
        'is_deleted' => true
    ];
}
