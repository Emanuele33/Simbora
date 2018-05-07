<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Marker Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $dayweek
 * @property \Cake\I18n\FrozenTime $departuretime
 * @property \Cake\I18n\FrozenTime $returntime
 * @property string $destiny
 */
class Marker extends Entity
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
        'address' => true,
        'dayweek' => true,
        'departuretime' => true,
        'returntime' => true,
        'destiny' => true
    ];
}
