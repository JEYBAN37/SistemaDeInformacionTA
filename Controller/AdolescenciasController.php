<?php
App::uses('AppController', 'Controller');
/**
 * Adolescencias Controller
 *
 * @property Adolescencia $Adolescencia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AdolescenciasController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Adolescencia->recursive = 0;

		$count = $this->Adolescencia->find('count');
		$this->Paginator->settings['limit'] = $count;

		$this->set('adolescencias', $this->paginate());
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
		if (!$this->Adolescencia->exists($id)) {
			throw new NotFoundException(__('Invalid adolescencia'));
		}
		$options = array('conditions' => array('Adolescencia.' . $this->Adolescencia->primaryKey => $id));
		$this->set('adolescencia', $this->Adolescencia->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Adolescencia->create();
			if ($this->Adolescencia->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente, por favor actulizar datos personales', 'default', array('class' => 'alert alert-success'));
				$familiaId = isset($this->data["Adolescencia"]["familia_id"]) ? $this->data["Adolescencia"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'personas',
					'action' => 'edit',
					$this->data["Adolescencia"]["persona_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$familias = $this->Adolescencia->Familia->find('list');
		$canalizaciones = $this->Adolescencia->Canalizacion->find('list');
		$personas = $this->Adolescencia->Persona->find('list', array(
			'order' => array('Persona.edad' => 'asc'),
			'fields' => array('Persona.id', 'Persona.apellidosnombre'),
			'conditions' => array('Persona.edad >=' => 12, 'Persona.edad <=' => 17),
			'recursive' => 0
		));
		$this->set(compact('familias', 'personas', 'canalizaciones'));
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
		if (!$this->Adolescencia->exists($id)) {
			throw new NotFoundException(__('Invalid adolescencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Adolescencia->save($this->request->data)) {
				$this->Session->setFlash('Se ha guardado correctamente, por favor actulizar datos personales', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Adolescencia"]["familia_id"]));
			} else {
				$this->Session->setFlash(__('The adolescencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Adolescencia.' . $this->Adolescencia->primaryKey => $id));
			$this->request->data = $this->Adolescencia->find('first', $options);
		}
		$familias = $this->Adolescencia->Familia->find('list');
		$canalizaciones = $this->Adolescencia->Canalizacion->find('list');
		$personas = $this->Adolescencia->Persona->find('list');
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
		$this->Adolescencia->id = $id;
		if (!$this->Adolescencia->exists()) {
			throw new NotFoundException(__('Invalid adolescencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Adolescencia->delete()) {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
