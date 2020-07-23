<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Serviceinclus Controller
 *
 * @property \App\Model\Table\ServiceinclusTable $Serviceinclus
 * @method \App\Model\Entity\Serviceinclus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServiceinclusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offres'],
        ];
        $serviceinclus = $this->paginate($this->Serviceinclus);

        $this->set(compact('serviceinclus'));
    }

    /**
     * View method
     *
     * @param string|null $id Serviceinclus id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serviceinclus = $this->Serviceinclus->get($id, [
            'contain' => ['Offres'],
        ]);

        $this->set(compact('serviceinclus'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serviceinclus = $this->Serviceinclus->newEmptyEntity();
        if ($this->request->is('post')) {
            $serviceinclus = $this->Serviceinclus->patchEntity($serviceinclus, $this->request->getData());
            if ($this->Serviceinclus->save($serviceinclus)) {
                $this->Flash->success(__('The serviceinclus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The serviceinclus could not be saved. Please, try again.'));
        }
        $offres = $this->Serviceinclus->Offres->find('list', ['limit' => 200]);
        $this->set(compact('serviceinclus', 'offres'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Serviceinclus id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serviceinclus = $this->Serviceinclus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serviceinclus = $this->Serviceinclus->patchEntity($serviceinclus, $this->request->getData());
            if ($this->Serviceinclus->save($serviceinclus)) {
                $this->Flash->success(__('The serviceinclus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The serviceinclus could not be saved. Please, try again.'));
        }
        $offres = $this->Serviceinclus->Offres->find('list', ['limit' => 200]);
        $this->set(compact('serviceinclus', 'offres'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Serviceinclus id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serviceinclus = $this->Serviceinclus->get($id);
        if ($this->Serviceinclus->delete($serviceinclus)) {
            $this->Flash->success(__('The serviceinclus has been deleted.'));
        } else {
            $this->Flash->error(__('The serviceinclus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
