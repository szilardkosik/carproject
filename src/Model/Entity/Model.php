<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Model Entity
 *
 * @property int $id
 * @property int $make_id
 * @property string $model_name
 *
 * @property \App\Model\Entity\Make $make
 * @property \App\Model\Entity\Car[] $cars
 */
class Model extends Entity
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
        'model_name' => true,
        'make' => true,
        'cars' => true
    ];
}
