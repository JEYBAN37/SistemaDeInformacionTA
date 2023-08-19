<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property int $numproductos
 * @property string $lineas
 * @property string $dimensiones
 * @property string $nombredim
 * @property string $costodim
 * @property string $linormativas
 * @property string $resultado
 * @property string $activity
 * @property string $vidacursos
 * @property string $entorno
 * @property string $tecnologias
 * @property string $porcproducto
 * @property string $tarea
 * @property string $porctareas
 * @property string $clasobjetivos
 * @property string $evidencia
 * @property int $responsable_id
 * @property \Cake\I18n\FrozenTime $fecha_registro
 * @property int $porcentajeavance
 * @property string $observacionpic
 * @property string $observacionsms
 * @property string $estado
 * @property int $referente_id
 * @property string $enlace
 * @property string $enlace2
 * @property string $anexo
 * @property string $dirproduc
 * @property \Cake\I18n\FrozenTime $fecha_actualizado
 * @property \Cake\I18n\FrozenTime $fecha_revisado
 *
 * @property \App\Model\Entity\Responsable $responsable
 * @property \App\Model\Entity\Referente $referente
 */
class Producto extends Entity
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
        'numproductos' => true,
        'lineas' => true,
        'dimensiones' => true,
        'nombredim' => true,
        'costodim' => true,
        'linormativas' => true,
        'resultado' => true,
        'activity' => true,
        'vidacursos' => true,
        'entorno' => true,
        'tecnologias' => true,
        'porcproducto' => true,
        'tarea' => true,
        'porctareas' => true,
        'clasobjetivos' => true,
        'evidencia' => true,
        'responsable_id' => true,
        'fecha_registro' => true,
        'porcentajeavance' => true,
        'observacionpic' => true,
        'observacionsms' => true,
        'estado' => true,
        'referente_id' => true,
        'enlace' => true,
        'enlace2' => true,
        'anexo' => true,
        'dirproduc' => true,
        'fecha_actualizado' => true,
        'fecha_revisado' => true,
        'responsable' => true,
        'referente' => true,
    ];
}
