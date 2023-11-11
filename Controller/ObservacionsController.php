<?php
App::uses('AppController', 'Controller');
/**
 * Observacions Controller
 *
 * @property Observacion $Observacion
 * @property PaginatorComponent $Paginator
 */
class ObservacionsController extends AppController
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
		$this->Observacion->recursive = 0;
		$this->set('observacions', $this->Paginator->paginate());
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
		if (!$this->Observacion->exists($id)) {
			throw new NotFoundException(__('Invalid observacion'));
		}
		$options = array('conditions' => array('Observacion.' . $this->Observacion->primaryKey => $id));
		$this->set('observacion', $this->Observacion->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Observacion->create();
			if ($this->Observacion->save($this->request->data)) {
				$this->Session->setFlash('La observación se ha guardado correctamente', 'default', array('class' => 'alert alert-success'));
				$familiaId = isset($this->data["Observacion"]["familia_id"]) ? $this->data["Observacion"]["familia_id"] : null;

				return $this->redirect(array(
					'controller' => 'familias',
					'action' => 'view',
					$this->data["Observacion"]["familia_id"],
					'?' => array(
						'familia_id' => $familiaId
					)
				));
			} else {
				$this->Session->setFlash(__('The observacion could not be saved. Please, try again.'));
			}
		}
		$familias = $this->Observacion->Familia->find('list');
		$responsables = $this->Observacion->Responsable->find('list');
		$this->set(compact('familias', 'responsables'));
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
		if (!$this->Observacion->exists($id)) {
			throw new NotFoundException(__('Invalid observacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Observacion->save($this->request->data)) {
				$this->Session->setFlash(__('The observacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The observacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Observacion.' . $this->Observacion->primaryKey => $id));
			$this->request->data = $this->Observacion->find('first', $options);
		}
		$familias = $this->Observacion->Familia->find('list');
		$this->set(compact('familias'));
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
		$this->Observacion->id = $id;
		if (!$this->Observacion->exists()) {
			throw new NotFoundException(__('Invalid observacion'));
		}

		// Obtener el familia_id antes de eliminar
		$familiaId = $this->Observacion->field('familia_id');



		$this->request->allowMethod('post', 'delete');
		if ($this->Observacion->delete()) {


			$this->Session->setFlash('El registro se borro exitosamente', 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash('El registro no se pudo borrar', 'default', array('class' => 'alert alert-danger'));
		}


		// Redirigir al controller "familias" y a la acción "view" con el familia_id
		return $this->redirect(array('controller' => 'familias', 'action' => 'view', $familiaId));
	}
}
