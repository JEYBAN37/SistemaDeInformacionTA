<?php
App::uses('AppController', 'Controller');
/**
 * Juventudadultos Controller
 *
 * @property Juventudadulto $Juventudadulto
 * @property PaginatorComponent $Paginator
 */
class JuventudadultosController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Juventudadulto->recursive = 0;

		$count = $this->Juventudadulto->find('count');
		$this->Paginator->settings['limit'] = $count;

		$this->set('juventudadultos', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Juventudadulto->exists($id)) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}
		$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
		$this->set('juventudadulto', $this->Juventudadulto->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Juventudadulto->create();

			$fechaNacimiento = $this->request->data['Juventudadulto']['fechanac'];
			$edad = $this->calcularEdad($fechaNacimiento);
			$this->request->data['Juventudadulto']['edad'] = $edad;

			if ($this->Juventudadulto->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente, por favor actulizar datos personales', 'default', array('class' => 'alert alert-success'));
				$familiaId = isset($this->data["Juventudadulto"]["familia_id"]) ? $this->data["Juventudadulto"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'familias',
					'action' => 'view',
					$this->data["Juventudadulto"]["familia_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$familias = $this->Juventudadulto->Familia->find('list');
		$canalizaciones = $this->Juventudadulto->Canalizacion->find('list');

		$this->set(compact('familias',  'canalizaciones'));
	}

	private function calcularEdad($fechaNacimiento)
	{
		$fechaActual = new DateTime();
		$fechaNacimiento = new DateTime($fechaNacimiento['year'] . '-' . $fechaNacimiento['month'] . '-' . $fechaNacimiento['day']);
		$diferencia = $fechaNacimiento->diff($fechaActual);

		$anosTotales = $diferencia->y;


		return number_format($anosTotales, 1);
	}


	public function editCanalizacion($id = null)
	{
		if (!$this->Juventudadulto->exists($id)) {
			throw new NotFoundException(__('Invalid Juventudadulto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$canalizacionId = $this->request->data['Juventudadulto']['canalizacion_id'];


			if ($this->Juventudadulto->save($this->request->data)) {
				$this->Session->setFlash('Registro de Juventudadulto actualizado', 'default', array('class' => 'alert alert-success'));
				//return $this->redirect(array('action' => 'index'));
				//return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
				return $this->redirect(array(
					'controller' => 'canalizacions',
					'action' => 'view',
					$canalizacionId
				));	} else {
				$this->Session->setFlash(__('The Juventudadulto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
			$this->request->data = $this->Juventudadulto->find('first', $options);
		}
		$familias = $this->Juventudadulto->Familia->find('list', array(
			'order' => array('Familia.id' => 'desc'),

		));

		$canalizaciones = $this->Juventudadulto->Canalizacion->find('list');
		$this->set(compact('familias', 'canalizaciones'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		if (!$this->Juventudadulto->exists($id)) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Juventudadulto->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Juventudadulto"]["familia_id"]));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
			$this->request->data = $this->Juventudadulto->find('first', $options);
		}
		$familias = $this->Juventudadulto->Familia->find('list');
		$canalizaciones = $this->Juventudadulto->Canalizacion->find('list');
		$personas = $this->Juventudadulto->Persona->find('list');
		$this->set(compact('familias', 'personas', 'canalizaciones'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		$this->Juventudadulto->id = $id;
		if (!$this->Juventudadulto->exists()) {
			throw new NotFoundException(__('Invalid juventudadulto'));
		}
		// Obtener el familia_id antes de eliminar
		$familiaId = $this->Juventudadulto->field('familia_id');
		$this->request->allowMethod('post', 'delete');
		if ($this->Juventudadulto->delete()) {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-danger'));
		}
		// Redirigir al controller "familias" y a la acción "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}
