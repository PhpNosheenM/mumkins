<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * State Entity
 *
 * @property int $id
 * @property string|null $state_code
 * @property string|null $state_name
 * @property string|null $country_code
 * @property int $delete_status
 *
 * @property \App\Model\Entity\City[] $cities
 * @property \App\Model\Entity\CustomerAddress[] $customer_addresses
 */
class State extends Entity
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
        'state_code' => true,
        'state_name' => true,
        'country_code' => true,
        'delete_status' => true,
        'cities' => true,
        'customer_addresses' => true
    ];
}
