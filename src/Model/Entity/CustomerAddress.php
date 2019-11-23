<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerAddress Entity
 *
 * @property int $id
 * @property string $name
 * @property string $mobile_number
 * @property string $address
 * @property int $state_id
 * @property int $city_id
 * @property int $pincode
 * @property int $is_default
 * @property int $is_deleted
 * @property int $customer_id
 *
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\Customer $customer
 */
class CustomerAddress extends Entity
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
        'name' => true,
        'mobile_number' => true,
        'address' => true,
        'state_id' => true,
        'city_id' => true,
        'pincode' => true,
        'is_default' => true,
        'is_deleted' => true,
        'customer_id' => true,
        'state' => true,
        'city' => true,
        'customer' => true
    ];
}
