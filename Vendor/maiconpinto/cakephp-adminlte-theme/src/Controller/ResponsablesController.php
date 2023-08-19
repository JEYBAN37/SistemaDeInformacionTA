<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Responsables Controller
 *
 * @property \App\Model\Table\ResponsablesTable $Responsables
 *
 * @method \App\Model\Entity\Responsable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResponsablesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $responsables = $this->paginate($this->Responsables);

        $this->set(compact('responsables'));
    }

    /**
     * View method
     *
     * @param string|null $id Responsable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responsable = $this->Responsables->get($id, [
            'contain' => ['Productos'],
        ]);

        $this->set('responsable', $responsable);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responsable = $this->Responsables->newEmptyEntity();
        if ($this->request->is('post')) {
            $responsable = $this->Responsables->patchEntity($responsable, $this->request->getData());
            if ($this->Responsables->save($responsable)) {
                $this->Flash->success(__('The responsable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsable could not be saved. Please, try again.'));
        }
        $this->set(compact('responsable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Responsable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responsable = $this->Responsables->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responsable = $this->Responsables->patchEntity($responsable, $this->request->getData());
            if ($this->Responsables->save($responsable)) {
                $this->Flash->success(__('The responsable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsable could not be saved. Please, try again.'));
        }
        $this->set(compact('responsable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Responsable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responsable = $this->Responsables->get($id);
        if ($this->Responsables->delete($responsable)) {
            $this->Flash->success(__('The responsable has been deleted.'));
        } else {
            $this->Flash->error(__('The responsable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
