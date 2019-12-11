<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * City Entity
 *
 * @property int $id
 * @property string|null $city_name
 * @property string|null $city_code
 * @property int|null $state_id
 * @property int $delete_status
 *
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\CustomerAddress[] $customer_addresses
 */
class City extends Entity
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
        'city_name' => true,
        'city_code' => true,
        'state_id' => true,
        'delete_status' => true,
        'state' => true,
        'customer_addresses' => true
    ];
}
