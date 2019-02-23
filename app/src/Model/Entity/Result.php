<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Result Entity
 *
 * @property int $id
 * @property int $result_type_id
 * @property int $equation_id
 * @property float $x1
 * @property float $x2
 * @property string $message
 * @property int $count
 *
 * @property \App\Model\Entity\ResultType $result_type
 * @property \App\Model\Entity\Equation[] $equations
 */
class Result extends Entity
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
        'result_type_id' => true,
        'equation_id' => true,
        'x1' => true,
        'x2' => true,
        'message' => true,
        'count' => true,
        'result_type' => true,
        'equations' => true
    ];
}
