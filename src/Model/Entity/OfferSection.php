<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfferSection Entity
 *
 * @property int $id
 * @property string $offer_image
 * @property string $offer_url
 * @property int $is_deleted
 */
class OfferSection extends Entity
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
        'offer_image' => true,
        'offer_url' => true,
        'is_deleted' => true
    ];
}
