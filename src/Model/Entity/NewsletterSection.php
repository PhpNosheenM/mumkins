<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NewsletterSection Entity
 *
 * @property int $id
 * @property string $news_image
 * @property string $news_url
 * @property int $is_deleted
 */
class NewsletterSection extends Entity
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
        'news_image' => true,
        'news_url' => true,
        'is_deleted' => true
    ];
}
