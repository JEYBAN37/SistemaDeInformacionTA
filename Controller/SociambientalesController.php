<?php
App::uses('AppController', 'Controller');
/**
 * Sociambientales Controller
 *
 * @property Sociambientale $Sociambientale
 * @property PaginatorComponent $Paginator
 */
class SociambientalesController extends AppController {

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
		$this->Sociambientale->recursive = 0;
		$this->set('sociambientales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sociambientale->exists($id)) {
			throw new NotFoundException(__('Invalid sociambientale'));
		}
		$options = array('conditions' => array('Sociambientale.' . $this->Sociambientale->primaryKey => $id));
		$this->set('sociambientale', $this->Sociambientale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sociambientale->create();
			if ($this->Sociambientale->save($this->request->data)) {
				$this->Session->setFlash(__('The sociambientale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sociambientale could not be saved. Please, try again.'));
			}
		}
		$responsables = $this->Sociambientale->Responsable->find('list');
		$ubicaciones = $this->Sociambientale->Ubicacion->find('list');
		$viviendas = $this->Sociambientale->Vivienda->find('list');
		$tenencias = $this->Sociambientale->Tenencium->find('list');
		$paredes = $this->Sociambientale->Pared->find('list');
		$pisos = $this->Sociambientale->Piso->find('list');
		$techos = $this->Sociambientale->Techo->find('list');
		$riesgoexternos = $this->Sociambientale->Riesgoexterno->find('list');
		$accesos = $this->Sociambientale->Acceso->find('list');
		$transportes = $this->Sociambientale->Transporte->find('list');
		$riesgos = $this->Sociambientale->Riesgo->find('list');
		$aguaservicios = $this->Sociambientale->Aguaservicio->find('list');
		$diposicionexcretas = $this->Sociambientale->Diposicionexcretum->find('list');
		$aguaresidualeses = $this->Sociambientale->Aguaresiduale->find('list');
		$basuras = $this->Sociambientale->Basura->find('list');
		$combustibles = $this->Sociambientale->Combustible->find('list');
		$mascotases = $this->Sociambientale->Mascota->find('list');
		$vectores = $this->Sociambientale->Vector->find('list');
		$enferemedadmenores = $this->Sociambientale->Enferemedadmenor->find('list');
		$enferemedadmayores = $this->Sociambientale->Enferemedadmayor->find('list');
		$this->set(compact('responsables', 'ubicaciones', 'viviendas', 'tenencias', 'paredes', 'pisos', 'techos', 'riesgoexternos', 'accesos', 'transportes', 'riesgos', 'aguaservicios', 'diposicionexcretas', 'aguaresidualeses', 'basuras', 'combustibles', 'mascotases', 'vectores', 'enferemedadmenores', 'enferemedadmayores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sociambientale->exists($id)) {
			throw new NotFoundException(__('Invalid sociambientale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sociambientale->save($this->request->data)) {
				$this->Session->setFlash(__('The sociambientale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sociambientale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sociambientale.' . $this->Sociambientale->primaryKey => $id));
			$this->request->data = $this->Sociambientale->find('first', $options);
		}
		$responsables = $this->Sociambientale->Responsable->find('list');
		$ubicaciones = $this->Sociambientale->Ubicacion->find('list');
		$viviendas = $this->Sociambientale->Vivienda->find('list');
		$tenencias = $this->Sociambientale->Tenencium->find('list');
		$paredes = $this->Sociambientale->Pared->find('list');
		$pisos = $this->Sociambientale->Piso->find('list');
		$techos = $this->Sociambientale->Techo->find('list');
		$riesgoexternos = $this->Sociambientale->Riesgoexterno->find('list');
		$accesos = $this->Sociambientale->Acceso->find('list');
		$transportes = $this->Sociambientale->Transporte->find('list');
		$riesgos = $this->Sociambientale->Riesgo->find('list');
		$aguaservicios = $this->Sociambientale->Aguaservicio->find('list');
		$diposicionexcretas = $this->Sociambientale->Diposicionexcretum->find('list');
		$aguaresidualeses = $this->Sociambientale->Aguaresiduale->find('list');
		$basuras = $this->Sociambientale->Basura->find('list');
		$combustibles = $this->Sociambientale->Combustible->find('list');
		$mascotases = $this->Sociambientale->Mascota->find('list');
		$vectores = $this->Sociambientale->Vector->find('list');
		$enferemedadmenores = $this->Sociambientale->Enferemedadmenor->find('list');
		$enferemedadmayores = $this->Sociambientale->Enferemedadmayor->find('list');
		$this->set(compact('responsables', 'ubicaciones', 'viviendas', 'tenencias', 'paredes', 'pisos', 'techos', 'riesgoexternos', 'accesos', 'transportes', 'riesgos', 'aguaservicios', 'diposicionexcretas', 'aguaresidualeses', 'basuras', 'combustibles', 'mascotases', 'vectores', 'enferemedadmenores', 'enferemedadmayores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sociambientale->id = $id;
		if (!$this->Sociambientale->exists()) {
			throw new NotFoundException(__('Invalid sociambientale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sociambientale->delete()) {
			$this->Session->setFlash(__('The sociambientale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sociambientale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
