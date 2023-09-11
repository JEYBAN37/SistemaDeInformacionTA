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
		$this->set('juventudadultos', $this->Paginator->paginate());
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
			if ($this->Juventudadulto->save($this->request->data)) {
				$this->Session->setFlash(__('The juventudadulto has been saved.'));
				$familiaId = isset($this->data["Juventudadulto"]["familia_id"]) ? $this->data["Infantil"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'personas',
					'action' => 'edit',
					$this->data["Juventudadulto"]["persona_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$familias = $this->Juventudadulto->Familia->find('list');
		$personas = $this->Juventudadulto->Persona->find('list', array(
			'order' => array('Persona.edad' => 'asc'),
			'fields' => array('Persona.id', 'Persona.apellidosnombre'),
			'conditions' => array('Persona.edad >=' => 18, 'Persona.edad <=' => 28),
			'recursive' => 0
		));
		$this->set(compact('familias', 'personas'));
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
				$this->Session->setFlash(__('The juventudadulto has been saved.'));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Juventudadulto"]["familia_id"]));
			} else {
				$this->Session->setFlash(__('The juventudadulto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Juventudadulto.' . $this->Juventudadulto->primaryKey => $id));
			$this->request->data = $this->Juventudadulto->find('first', $options);
		}
		$familias = $this->Juventudadulto->familia->find('list');
		$personas = $this->Juventudadulto->Persona->find('list');
		$this->set(compact('familias', 'personas'));
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
		$this->request->allowMethod('post', 'delete');
		if ($this->Juventudadulto->delete()) {
			$this->Session->setFlash(__('The juventudadulto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The juventudadulto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
