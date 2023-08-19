<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Referentes Controller
 *
 * @property \App\Model\Table\ReferentesTable $Referentes
 *
 * @method \App\Model\Entity\Referente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReferentesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $referentes = $this->paginate($this->Referentes);

        $this->set(compact('referentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Referente id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $referente = $this->Referentes->get($id, [
            'contain' => ['Productos'],
        ]);

        $this->set('referente', $referente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $referente = $this->Referentes->newEmptyEntity();
        if ($this->request->is('post')) {
            $referente = $this->Referentes->patchEntity($referente, $this->request->getData());
            if ($this->Referentes->save($referente)) {
                $this->Flash->success(__('The referente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The referente could not be saved. Please, try again.'));
        }
        $this->set(compact('referente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Referente id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $referente = $this->Referentes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $referente = $this->Referentes->patchEntity($referente, $this->request->getData());
            if ($this->Referentes->save($referente)) {
                $this->Flash->success(__('The referente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The referente could not be saved. Please, try again.'));
        }
        $this->set(compact('referente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Referente id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $referente = $this->Referentes->get($id);
        if ($this->Referentes->delete($referente)) {
            $this->Flash->success(__('The referente has been deleted.'));
        } else {
            $this->Flash->error(__('The referente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
