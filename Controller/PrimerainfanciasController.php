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
				$this->Session->setFlash('Registro de persona guradado, por favor actualice datos de la persona', 'default', array('class' => 'alert alert-success'));
				//echo '<script> alert("registro guardado"); </script>';
				//return $this->redirect(array('controller' => 'familias', 'action' => 'index'));
				//return $this->redirect(array('controller' => 'familias', 'action' => 'view/' . $this->data["Primerainfancia"]["familia_id"]));
				return $this->redirect(array('controller' => 'personas', 'action' => 'edit/' . $this->data["Primerainfancia"]["persona_id"]));
			} else {
				$this->Session->setFlash('No se ha guardado, por favor revisar campos', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$familias = $this->Primerainfancia->Familia->find('list');
		$personas = $this->Primerainfancia->Persona->find('list', array(
			'order' => array('Persona.edad' => 'asc'),
			'fields' => array('Persona.id', 'Persona.apellidosnombre'),
			'conditions' => array('Persona.edad BETWEEN ? AND ?' => array('0', '1')),
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
			throw new NotFoundException(__('Invalid primerainfancia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Primerainfancia->save($this->request->data)) {
				$this->Session->setFlash(__('The primerainfancia has been saved.'));
				return $this->redirect(array('action' => 'index'));
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
		$this->request->allowMethod('post', 'delete');
		if ($this->Primerainfancia->delete()) {
			$this->Session->setFlash(__('The primerainfancia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The primerainfancia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
