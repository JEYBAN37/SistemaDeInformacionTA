<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productos Model
 *
 * @property \App\Model\Table\ResponsablesTable&\Cake\ORM\Association\BelongsTo $Responsables
 * @property \App\Model\Table\ReferentesTable&\Cake\ORM\Association\BelongsTo $Referentes
 *
 * @method \App\Model\Entity\Producto newEmptyEntity()
 * @method \App\Model\Entity\Producto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Producto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Producto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Producto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Producto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('productos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Responsables', [
            'foreignKey' => 'responsable_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Referentes', [
            'foreignKey' => 'referente_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('numproductos')
            ->requirePresence('numproductos', 'create')
            ->notEmptyString('numproductos');

        $validator
            ->scalar('lineas')
            ->maxLength('lineas', 250)
            ->requirePresence('lineas', 'create')
            ->notEmptyString('lineas');

        $validator
            ->scalar('dimensiones')
            ->maxLength('dimensiones', 250)
            ->requirePresence('dimensiones', 'create')
            ->notEmptyString('dimensiones');

        $validator
            ->scalar('nombredim')
            ->maxLength('nombredim', 20)
            ->requirePresence('nombredim', 'create')
            ->notEmptyString('nombredim');

        $validator
            ->scalar('costodim')
            ->maxLength('costodim', 50)
            ->requirePresence('costodim', 'create')
            ->notEmptyString('costodim');

        $validator
            ->scalar('linormativas')
            ->requirePresence('linormativas', 'create')
            ->notEmptyString('linormativas');

        $validator
            ->scalar('resultado')
            ->requirePresence('resultado', 'create')
            ->notEmptyString('resultado');

        $validator
            ->scalar('activity')
            ->maxLength('activity', 500)
            ->requirePresence('activity', 'create')
            ->notEmptyString('activity');

        $validator
            ->scalar('vidacursos')
            ->maxLength('vidacursos', 100)
            ->requirePresence('vidacursos', 'create')
            ->notEmptyString('vidacursos');

        $validator
            ->scalar('entorno')
            ->maxLength('entorno', 100)
            ->requirePresence('entorno', 'create')
            ->notEmptyString('entorno');

        $validator
            ->scalar('tecnologias')
            ->maxLength('tecnologias', 100)
            ->requirePresence('tecnologias', 'create')
            ->notEmptyString('tecnologias');

        $validator
            ->scalar('porcproducto')
            ->maxLength('porcproducto', 50)
            ->requirePresence('porcproducto', 'create')
            ->notEmptyString('porcproducto');

        $validator
            ->scalar('tarea')
            ->requirePresence('tarea', 'create')
            ->notEmptyString('tarea');

        $validator
            ->scalar('porctareas')
            ->maxLength('porctareas', 50)
            ->requirePresence('porctareas', 'create')
            ->notEmptyString('porctareas');

        $validator
            ->scalar('clasobjetivos')
            ->maxLength('clasobjetivos', 50)
            ->requirePresence('clasobjetivos', 'create')
            ->notEmptyString('clasobjetivos');

        $validator
            ->scalar('evidencia')
            ->requirePresence('evidencia', 'create')
            ->notEmptyString('evidencia');

        $validator
            ->dateTime('fecha_registro')
            ->notEmptyDateTime('fecha_registro');

        $validator
            ->integer('porcentajeavance')
            ->requirePresence('porcentajeavance', 'create')
            ->notEmptyString('porcentajeavance');

        $validator
            ->scalar('observacionpic')
            ->requirePresence('observacionpic', 'create')
            ->notEmptyString('observacionpic');

        $validator
            ->scalar('observacionsms')
            ->requirePresence('observacionsms', 'create')
            ->notEmptyString('observacionsms');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 250)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        $validator
            ->scalar('enlace')
            ->maxLength('enlace', 250)
            ->requirePresence('enlace', 'create')
            ->notEmptyString('enlace');

        $validator
            ->scalar('enlace2')
            ->maxLength('enlace2', 250)
            ->requirePresence('enlace2', 'create')
            ->notEmptyString('enlace2');

        $validator
            ->scalar('anexo')
            ->maxLength('anexo', 500)
            ->requirePresence('anexo', 'create')
            ->notEmptyString('anexo');

        $validator
            ->scalar('dirproduc')
            ->maxLength('dirproduc', 500)
            ->requirePresence('dirproduc', 'create')
            ->notEmptyString('dirproduc');

        $validator
            ->dateTime('fecha_actualizado')
            ->notEmptyDateTime('fecha_actualizado');

        $validator
            ->dateTime('fecha_revisado')
            ->notEmptyDateTime('fecha_revisado');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['responsable_id'], 'Responsables'));
        $rules->add($rules->existsIn(['referente_id'], 'Referentes'));

        return $rules;
    }
}
