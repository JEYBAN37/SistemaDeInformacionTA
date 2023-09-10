<?php
App::uses('AppController', 'Controller');
/**
 * Primerainfancias Controller
 *
 * @property Primerainfancia $Primerainfancia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PrimerainfanciasController extends AppController
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
		$this->Primerainfancia->recursive = 0;
		$this->set('primerainfancias', $this->Paginator->paginate());
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
		if (!$this->Primerainfancia->exists($id)) {
			throw new NotFoundException(__('Invalid primerainfancia'));
		}
		$options = array('conditions' => array('Primerainfancia.' . $this->Primerainfancia->primaryKey => $id));
		$this->set('primerainfancia', $this->Primerainfancia->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Primerainfancia->create();
			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash('Registro de Primerainfancia guradado, por favor actualice datos de la Primerainfancia', 'default', array('class' => 'alert alert-success'));

				// Verificar si el valor es nulo o no
				$familiaId = isset($this->data["Primerainfancia"]["familia_id"]) ? $this->data["Primerainfancia"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'personas',
					'action' => 'edit',
					$this->data["Primerainfancia"]["persona_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}


		$familias = $this->Primerainfancia->Familia->find('list');
		$personas = $this->Primerainfancia->Persona->find('list', array(
			'order' => array('Persona.edad' => 'asc'),
			'fields' => array('Persona.id', 'Persona.apellidosnombre'),
			'conditions' => array('Persona.edad <' => '2'),
			'recursive' => 0
		));
		$this->set(compact('familias', 'personas'));
	}

	public function add2_5()
	{
		if ($this->request->is('post')) {
			$this->Primerainfancia->create();
			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash('Registro de Primerainfancia guardado, por favor actualice datos de la Primerainfancia', 'default', array('class' => 'alert alert-success'));

				// Verificar si el valor es nulo o no
				$familiaId = isset($this->data["Primerainfancia"]["familia_id"]) ? $this->data["Primerainfancia"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'personas',
					'action' => 'edit',
					$this->data["Primerainfancia"]["persona_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$familias = $this->Primerainfancia->Familia->find('list');
		$personas = $this->Primerainfancia->Persona->find('list', array(
			'order' => array('Persona.edad' => 'asc'),
			'fields' => array('Persona.id', 'Persona.apellidosnombre'),
			'conditions' => array('Persona.edad >=' => '2', 'Persona.edad <=' => '5'),
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
		if (!$this->Primerainfancia->exists($id)) {
			throw new NotFoundException(__('Invalid Primerainfancia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash(__('The Primerainfancia has been saved.'));
				//return $this->redirect(array('action' => 'index'));
				//return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));

				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Primerainfancia"]["familia_id"]));

				//return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["familia"]["id"]));
			} else {
				$this->Session->setFlash(__('The Primerainfancia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Primerainfancia.' . $this->Primerainfancia->primaryKey => $id));
			$this->request->data = $this->Primerainfancia->find('first', $options);
		}
		$familias = $this->Primerainfancia->Familia->find('list', array(
			'order' => array('Familia.id' => 'desc'),

		));
		$personas = $this->Primerainfancia->Persona->find('list');
		$this->set(compact('familias', 'personas'));
	}








	public function edit2_5($id = null)
	{
		if (!$this->Primerainfancia->exists($id)) {
			throw new NotFoundException(__('Invalid primerainfancia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash(__('The primerainfancia has been saved.'));
				//return $this->redirect(array('action' => 'index'));
				//return $this->redirect(array('controller' => 'Primerainfancias', 'action' => 'edit/' . $this->data["Primerainfancia"]["Primerainfancia_id"]));
				return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Primerainfancia"]["familia_id"]));
			} else {
				$this->Session->setFlash(__('The primerainfancia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Primerainfancia.' . $this->Primerainfancia->primaryKey => $id));
			$this->request->data = $this->Primerainfancia->find('first', $options);
		}
		$familias = $this->Primerainfancia->Familia->find('list');
		$personas = $this->Primerainfancia->Persona->find('list');
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
		$this->Primerainfancia->id = $id;

		if (!$this->Primerainfancia->exists()) {
			throw new NotFoundException(__('Invalid primerainfancia'));
		}

		// Obtener el familia_id antes de eliminar
		$familiaId = $this->Primerainfancia->field('familia_id');

		$this->request->allowMethod('post', 'delete');

		if ($this->Primerainfancia->delete()) {
			$this->Session->setFlash(__('The primerainfancia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The primerainfancia could not be deleted. Please, try again.'));
		}

		// Redirigir al controller "familias" y a la acción "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}
