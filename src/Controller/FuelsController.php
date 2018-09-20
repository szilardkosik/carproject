<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fuels Controller
 *
 * @property \App\Model\Table\FuelsTable $Fuels
 *
 * @method \App\Model\Entity\Fuel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuelsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fuels = $this->paginate($this->Fuels);

        $this->set(compact('fuels'));
    }

    /**
     * View method
     *
     * @param string|null $id Fuel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fuel = $this->Fuels->get($id, [
            'contain' => ['Cars']
        ]);

        $this->set('fuel', $fuel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fuel = $this->Fuels->newEntity();
        if ($this->request->is('post')) {
            $fuel = $this->Fuels->patchEntity($fuel, $this->request->getData());
            if ($this->Fuels->save($fuel)) {
                $this->Flash->success(__('The fuel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fuel could not be saved. Please, try again.'));
        }
        $this->set(compact('fuel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fuel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fuel = $this->Fuels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fuel = $this->Fuels->patchEntity($fuel, $this->request->getData());
            if ($this->Fuels->save($fuel)) {
                $this->Flash->success(__('The fuel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fuel could not be saved. Please, try again.'));
        }
        $this->set(compact('fuel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fuel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fuel = $this->Fuels->get($id);
        if ($this->Fuels->delete($fuel)) {
            $this->Flash->success(__('The fuel has been deleted.'));
        } else {
            $this->Flash->error(__('The fuel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
