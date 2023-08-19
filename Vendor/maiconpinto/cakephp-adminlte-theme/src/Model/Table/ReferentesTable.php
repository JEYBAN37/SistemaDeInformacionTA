<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Referentes Model
 *
 * @property \App\Model\Table\ProductosTable&\Cake\ORM\Association\HasMany $Productos
 *
 * @method \App\Model\Entity\Referente newEmptyEntity()
 * @method \App\Model\Entity\Referente newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Referente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Referente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Referente findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Referente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Referente[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Referente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Referente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Referente[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Referente[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Referente[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Referente[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReferentesTable extends Table
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

        $this->setTable('referentes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Productos', [
            'foreignKey' => 'referente_id',
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
            ->scalar('tipodoc')
            ->maxLength('tipodoc', 15)
            ->requirePresence('tipodoc', 'create')
            ->notEmptyString('tipodoc');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 200)
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->date('fecha_nac')
            ->requirePresence('fecha_nac', 'create')
            ->notEmptyDate('fecha_nac');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 11)
            ->requirePresence('celular', 'create')
            ->notEmptyString('celular');

        $validator
            ->integer('telefono')
            ->requirePresence('telefono', 'create')
            ->notEmptyString('telefono');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 50)
            ->requirePresence('correo', 'create')
            ->notEmptyString('correo');

        $validator
            ->scalar('profesion')
            ->maxLength('profesion', 200)
            ->requirePresence('profesion', 'create')
            ->notEmptyString('profesion');

        $validator
            ->scalar('cargo')
            ->maxLength('cargo', 200)
            ->requirePresence('cargo', 'create')
            ->notEmptyString('cargo');

        $validator
            ->scalar('familiar')
            ->maxLength('familiar', 60)
            ->requirePresence('familiar', 'create')
            ->notEmptyString('familiar');

        $validator
            ->scalar('parentesco')
            ->maxLength('parentesco', 50)
            ->requirePresence('parentesco', 'create')
            ->notEmptyString('parentesco');

        $validator
            ->integer('tel_familiar')
            ->requirePresence('tel_familiar', 'create')
            ->notEmptyString('tel_familiar');

        return $validator;
    }
}
