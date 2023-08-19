<?php
App::uses('AppController', 'Controller');
/**
 * Verificaciones Controller
 *
 * @property Verificacion $Verificacion
 * @property PaginatorComponent $Paginator
 */
class VerificacionesController extends AppController {

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
		$this->Verificacion->recursive = 0;
		 $count = $this->Verificacion->find('count');
		  $this->Paginator->settings['limit'] = $count;
		$this->set('verificaciones', $this->Paginator->paginate());
	}




/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Verificacion->exists($id)) {
			throw new NotFoundException(__('Invalid verificacion'));
		}
		$options = array('conditions' => array('Verificacion.' . $this->Verificacion->primaryKey => $id));
		$this->set('verificacion', $this->Verificacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Verificacion->create();
			if ($this->Verificacion->save($this->request->data)) {
                
                if($this->request->data['btn'] == 'Guardar Otro') {
                    //$session->setFlash("registro guardado");
                      $this->Session->setFlash('El registro ha sido guardado.', 'default', array('class' => 'alert alert-success'));
                  
                    //echo '<script> alert("registro guardado"); </script>';
                    return $this->redirect(array('controller' => 'Verificaciones', 'action' => 'add'));
                } else {
                    //return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                
                    return $this->redirect(array('controller' => 'verificaciones', 'action' => 'index'));                
                    
                }
            } else {
				$this->Session->setFlash(__('The verificacion could not be saved. Please, try again.'));
			}
		}
		$subcriterios = $this->Verificacion->Subcriterio->find('list');
		$dimensiones = $this->Verificacion->Dimension->find('list');
		$instrumentos = $this->Verificacion->Instrumento->find('list');
		$criterios = $this->Verificacion->Criterio->find('list');
		$responsables = $this->Verificacion->Responsable->find('list');
		$this->set(compact('subcriterios', 'dimensiones', 'instrumentos', 'criterios', 'responsables'));
	}


	/* public function add() {
        if ($this->request->is('post')) {
            $this->Plsmomento->create();
            if ($this->Plsmomento->save($this->request->data)) {
                
                if($this->request->data['btn'] == 'Guardar Otro') {
                    //$session->setFlash("registro guardado");
                    $this->Session->setFlash(__('El Plan de sesion ha sido guardado.'));
                    //echo '<script> alert("registro guardado"); </script>';
                    return $this->redirect(array('controller' => 'Plsmomentos', 'action' => 'add?sesion='.$this->data["Plsmomento"]["plsesion_id"]));
                } else {
                    //return $this->redirect(array('controller' => 'plsesiones', 'action' => 'nuebus'));                
                    return $this->redirect(array('controller' => 'plsesiones', 'action' => 'view/'.$this->data["Plsmomento"]["plsesion_id"]));                
                    
                }
            } else {
                $this->Session->setFlash(__('The plsmomento could not be saved. Please, try again.'));
            }
        }
        $plsesiones = $this->Plsmomento->Plsesion->find('list');
        $this->set(compact('plsesiones'));
    }*/
    

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Verificacion->exists($id)) {
			throw new NotFoundException(__('Invalid verificacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Verificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The verificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The verificacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Verificacion.' . $this->Verificacion->primaryKey => $id));
			$this->request->data = $this->Verificacion->find('first', $options);
		}
			$subcriterios = $this->Verificacion->Subcriterio->find('list');
		$dimensiones = $this->Verificacion->Dimension->find('list');
		$instrumentos = $this->Verificacion->Instrumento->find('list');
		$criterios = $this->Verificacion->Criterio->find('list');
		$responsables = $this->Verificacion->Responsable->find('list');
		$this->set(compact('subcriterios', 'dimensiones', 'instrumentos', 'criterios', 'responsables'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Verificacion->id = $id;
		if (!$this->Verificacion->exists()) {
			throw new NotFoundException(__('Invalid verificacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Verificacion->delete()) {
			$this->Session->setFlash(__('The verificacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The verificacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
