<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Materielinclus Controller
 *
 * @property \App\Model\Table\MaterielinclusTable $Materielinclus
 * @method \App\Model\Entity\Materielinclus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaterielinclusController extends AppController
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
        $materielinclus = $this->paginate($this->Materielinclus);

        $this->set(compact('materielinclus'));
    }

    /**
     * View method
     *
     * @param string|null $id Materielinclus id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materielinclus = $this->Materielinclus->get($id, [
            'contain' => ['Offres'],
        ]);

        $this->set(compact('materielinclus'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materielinclus = $this->Materielinclus->newEmptyEntity();
        if ($this->request->is('post')) {
            $materielinclus = $this->Materielinclus->patchEntity($materielinclus, $this->request->getData());
            if ($this->Materielinclus->save($materielinclus)) {
                $this->Flash->success(__('The materielinclus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materielinclus could not be saved. Please, try again.'));
        }
        $offres = $this->Materielinclus->Offres->find('list', ['limit' => 200]);
        $this->set(compact('materielinclus', 'offres'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Materielinclus id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materielinclus = $this->Materielinclus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materielinclus = $this->Materielinclus->patchEntity($materielinclus, $this->request->getData());
            if ($this->Materielinclus->save($materielinclus)) {
                $this->Flash->success(__('The materielinclus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materielinclus could not be saved. Please, try again.'));
        }
        $offres = $this->Materielinclus->Offres->find('list', ['limit' => 200]);
        $this->set(compact('materielinclus', 'offres'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Materielinclus id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materielinclus = $this->Materielinclus->get($id);
        if ($this->Materielinclus->delete($materielinclus)) {
            $this->Flash->success(__('The materielinclus has been deleted.'));
        } else {
            $this->Flash->error(__('The materielinclus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
