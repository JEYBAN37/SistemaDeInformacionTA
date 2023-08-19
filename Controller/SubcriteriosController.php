<?php
App::uses('AppController', 'Controller');
/**
 * Subcriterios Controller
 *
 * @property Subcriterio $Subcriterio
 * @property PaginatorComponent $Paginator
 */
class SubcriteriosController extends AppController {

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
		$this->Subcriterio->recursive = 0;
		$this->set('subcriterios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subcriterio->exists($id)) {
			throw new NotFoundException(__('Invalid subcriterio'));
		}
		$options = array('conditions' => array('Subcriterio.' . $this->Subcriterio->primaryKey => $id));
		$this->set('subcriterio', $this->Subcriterio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subcriterio->create();
			if ($this->Subcriterio->save($this->request->data)) {
				$this->Session->setFlash(__('The subcriterio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcriterio could not be saved. Please, try again.'));
			}
		}
		$criterios = $this->Subcriterio->Criterio->find('list');
		$this->set(compact('criterios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Subcriterio->exists($id)) {
			throw new NotFoundException(__('Invalid subcriterio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subcriterio->save($this->request->data)) {
				$this->Session->setFlash(__('The subcriterio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subcriterio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subcriterio.' . $this->Subcriterio->primaryKey => $id));
			$this->request->data = $this->Subcriterio->find('first', $options);
		}
		$criterios = $this->Subcriterio->Criterio->find('list');
		$this->set(compact('criterios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Subcriterio->id = $id;
		if (!$this->Subcriterio->exists()) {
			throw new NotFoundException(__('Invalid subcriterio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subcriterio->delete()) {
			$this->Session->setFlash(__('The subcriterio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The subcriterio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
