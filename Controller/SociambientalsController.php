<?php
App::uses('AppController', 'Controller');
/**
 * Sociambientals Controller
 *
 * @property Sociambiental $Sociambiental
 * @property PaginatorComponent $Paginator
 */
class SociambientalsController extends AppController
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
		$this->Sociambiental->recursive = 0;
		$this->set('sociambientals', $this->Paginator->paginate());
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
		if (!$this->Sociambiental->exists($id)) {
			throw new NotFoundException(__('Invalid sociambiental'));
		}
		$options = array('conditions' => array('Sociambiental.' . $this->Sociambiental->primaryKey => $id));
		$this->set('sociambiental', $this->Sociambiental->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Sociambiental->create();
			if ($this->Sociambiental->save($this->request->data)) {
				$this->Session->setFlash('Registro se guradado con exito', 'default', array('class' => 'alert alert-success'));
				//return $this->redirect(array('action' => 'index'));
				return $this->redirect(array('controller' => 'Familias', 'action' => 'add?hogar=' . $this->Sociambiental->id));
			} else {
				$this->Session->setFlash('Registro no se guradado, por favor revisar la información', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$responsables = $this->Sociambiental->Responsable->find('list');
		$ubicaciones = $this->Sociambiental->Ubicacion->find('list');
		$this->set(compact('responsables', 'ubicaciones'));
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
		if (!$this->Sociambiental->exists($id)) {
			throw new NotFoundException(__('Invalid sociambiental'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sociambiental->save($this->request->data)) {
				$this->Session->setFlash('Registro se guradado con exito', 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('controller' => 'Familias', 'action' => 'index'));
			} else {
				$this->Session->setFlash('Registro no se guradado, por favor revisar la información', 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Sociambiental.' . $this->Sociambiental->primaryKey => $id));
			$this->request->data = $this->Sociambiental->find('first', $options);
		}
		$responsables = $this->Sociambiental->Responsable->find('list');
		$ubicaciones = $this->Sociambiental->Ubicacion->find('list');
		$this->set(compact('responsables', 'ubicaciones'));
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
		$this->Sociambiental->id = $id;
		if (!$this->Sociambiental->exists()) {
			throw new NotFoundException(__('Invalid sociambiental'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sociambiental->delete()) {
			$this->Session->setFlash(__('The sociambiental has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sociambiental could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
