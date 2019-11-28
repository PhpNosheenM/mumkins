<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BannerSection Entity
 *
 * @property int $id
 * @property string $background_image
 * @property string $hero_image
 * @property string $button_alignment
 * @property string $button1_text
 * @property string $button2_text
 * @property string $button1_url
 * @property string $button2_url
 * @property int $is_deleted
 */
class BannerSection extends Entity
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
        'background_image' => true,
        'hero_image' => true,
        'button_alignment' => true,
        'button1_text' => true,
        'button2_text' => true,
        'button1_url' => true,
        'button2_url' => true,
        'title' => true,
        'description' => true,
        'is_deleted' => true
    ];
}
