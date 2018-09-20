<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property int $make_id
 * @property int $model_id
 * @property int $fuel_id
 * @property string $lp_number
 * @property \Cake\I18n\FrozenDate $year
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $ceated
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Car extends Entity
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
        'make_id' => true,
        'model_id' => true,
        'fuel_id' => true,
        'lp_number' => true,
        'year' => true,
        'user_id' => true,
        'ceated' => true,
        'modified' => true,
        'user' => true
    ];
}
