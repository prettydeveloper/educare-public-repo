<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Observators Controller
 *
 * @property \App\Model\Table\ObservatorsTable $Observators
 *
 * @method \App\Model\Entity\Observator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ObservatorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $observators = $this->paginate($this->Observators);

        $this->set(compact('observators'));
    }

    /**
     * View method
     *
     * @param string|null $id Observator id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $observator = $this->Observators->get($id, [
            'contain' => []
        ]);

        $this->set('observator', $observator);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $observator = $this->Observators->newEntity();
        if ($this->request->is('post')) {
            $observator = $this->Observators->patchEntity($observator, $this->request->getData());
            if ($this->Observators->save($observator)) {
                $this->Flash->success(__('The observator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The observator could not be saved. Please, try again.'));
        }
        $this->set(compact('observator'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Observator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $observator = $this->Observators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $observator = $this->Observators->patchEntity($observator, $this->request->getData());
            if ($this->Observators->save($observator)) {
                $this->Flash->success(__('The observator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The observator could not be saved. Please, try again.'));
        }
        $this->set(compact('observator'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Observator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $observator = $this->Observators->get($id);
        if ($this->Observators->delete($observator)) {
            $this->Flash->success(__('The observator has been deleted.'));
        } else {
            $this->Flash->error(__('The observator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
