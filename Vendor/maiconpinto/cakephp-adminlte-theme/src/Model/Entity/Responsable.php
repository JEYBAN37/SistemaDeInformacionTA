<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Responsable Entity
 *
 * @property int $id
 * @property string $tipodoc
 * @property int $numero
 * @property string $nombres
 * @property \Cake\I18n\FrozenDate $fecha_nac
 * @property string $celular
 * @property int $telefono
 * @property string $correo
 * @property string $profesion
 * @property string $cargo
 * @property string $familiar
 * @property string $parentesco
 * @property int $tel_familiar
 *
 * @property \App\Model\Entity\Producto[] $productos
 */
class Responsable extends Entity
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
        'tipodoc' => true,
        'numero' => true,
        'nombres' => true,
        'fecha_nac' => true,
        'celular' => true,
        'telefono' => true,
        'correo' => true,
        'profesion' => true,
        'cargo' => true,
        'familiar' => true,
        'parentesco' => true,
        'tel_familiar' => true,
        'productos' => true,
    ];
}
