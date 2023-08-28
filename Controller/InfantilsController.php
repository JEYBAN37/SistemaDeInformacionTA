<?php
App::uses('AppController', 'Controller');
/**
 * Infantils Controller
 *
 * @property Infantil $Infantil
 * @property PaginatorComponent $Paginator
 */
class InfantilsController extends AppController {

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
	public function index() {
		$this->Infantil->recursive = 0;
		$this->set('infantils', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Infantil->exists($id)) {
			throw new NotFoundException(__('Invalid infantil'));
		}
		$options = array('conditions' => array('Infantil.' . $this->Infantil->primaryKey => $id));
		$this->set('infantil', $this->Infantil->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Infantil->create();
			if ($this->Infantil->save($this->request->data)) {
				$this->Session->setFlash(__('The infantil has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The infantil could not be saved. Please, try again.'));
			}
		}
		$familias = $this->Infantil->Familia->find('list');
		$personas = $this->Infantil->Persona->find('list');
		$this->set(compact('familias', 'personas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Infantil->exists($id)) {
			throw new NotFoundException(__('Invalid infantil'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Infantil->save($this->request->data)) {
				$this->Session->setFlash(__('The infantil has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The infantil could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Infantil.' . $this->Infantil->primaryKey => $id));
			$this->request->data = $this->Infantil->find('first', $options);
		}
		$familias = $this->Infantil->Familia->find('list');
		$personas = $this->Infantil->Persona->find('list');
		$this->set(compact('familias', 'personas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Infantil->id = $id;
		if (!$this->Infantil->exists()) {
			throw new NotFoundException(__('Invalid infantil'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Infantil->delete()) {
			$this->Session->setFlash(__('The infantil has been deleted.'));
		} else {
			$this->Session->setFlash(__('The infantil could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
