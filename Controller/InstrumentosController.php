<?php
App::uses('AppController', 'Controller');
/**
 * Instrumentos Controller
 *
 * @property Instrumento $Instrumento
 * @property PaginatorComponent $Paginator
 */
class InstrumentosController extends AppController {



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
		$this->Instrumento->recursive = 0;
		$this->set('instrumentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Instrumento->exists($id)) {
			throw new NotFoundException(__('Invalid instrumento'));
		}
		$options = array('conditions' => array('Instrumento.' . $this->Instrumento->primaryKey => $id));
		$this->set('instrumento', $this->Instrumento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instrumento->create();
			if ($this->Instrumento->save($this->request->data)) {
				$this->Session->setFlash(__('The instrumento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrumento could not be saved. Please, try again.'));
			}
		}
		$dimensiones = $this->Instrumento->Dimension->find('list');
		$this->set(compact('dimensiones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Instrumento->exists($id)) {
			throw new NotFoundException(__('Invalid instrumento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Instrumento->save($this->request->data)) {
				$this->Session->setFlash(__('The instrumento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instrumento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Instrumento.' . $this->Instrumento->primaryKey => $id));
			$this->request->data = $this->Instrumento->find('first', $options);
		}
		$dimensiones = $this->Instrumento->Dimension->find('list');
		$this->set(compact('dimensiones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Instrumento->id = $id;
		if (!$this->Instrumento->exists()) {
			throw new NotFoundException(__('Invalid instrumento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Instrumento->delete()) {
			$this->Session->setFlash(__('The instrumento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The instrumento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}



