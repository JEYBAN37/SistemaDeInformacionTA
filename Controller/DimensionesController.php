<?php
App::uses('AppController', 'Controller');
/**
 * Dimensiones Controller
 *
 * @property Dimension $Dimension
 * @property PaginatorComponent $Paginator
 */
class DimensionesController extends AppController {

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
		$this->Dimension->recursive = 0;
		$this->set('dimensiones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dimension->exists($id)) {
			throw new NotFoundException(__('Invalid dimension'));
		}
		$options = array('conditions' => array('Dimension.' . $this->Dimension->primaryKey => $id));
		$this->set('dimension', $this->Dimension->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dimension->create();
			if ($this->Dimension->save($this->request->data)) {
				$this->Session->setFlash(__('The dimension has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dimension could not be saved. Please, try again.'));
			}
		}
		
	}


	

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dimension->exists($id)) {
			throw new NotFoundException(__('Invalid dimension'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dimension->save($this->request->data)) {
				$this->Session->setFlash(__('The dimension has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dimension could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dimension.' . $this->Dimension->primaryKey => $id));
			$this->request->data = $this->Dimension->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dimension->id = $id;
		if (!$this->Dimension->exists()) {
			throw new NotFoundException(__('Invalid dimension'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dimension->delete()) {
			$this->Session->setFlash(__('The dimension has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dimension could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
