<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Observator Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $observation_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $created_by
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $deleted
 * @property string $notes
 */
class Observator extends Entity
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
        'observation_date' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modified_by' => true,
        'deleted' => true,
        'notes' => true,
        'testob' => true
    ];
}
