<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Etatpaiements Controller
 *
 * @property \App\Model\Table\EtatpaiementsTable $Etatpaiements
 * @method \App\Model\Entity\Etatpaiement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EtatpaiementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $etatpaiements = $this->paginate($this->Etatpaiements);

        $this->set(compact('etatpaiements'));
    }

    /**
     * View method
     *
     * @param string|null $id Etatpaiement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $etatpaiement = $this->Etatpaiements->get($id, [
            'contain' => ['Paiements'],
        ]);

        $this->set(compact('etatpaiement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etatpaiement = $this->Etatpaiements->newEmptyEntity();
        if ($this->request->is('post')) {
            $etatpaiement = $this->Etatpaiements->patchEntity($etatpaiement, $this->request->getData());
            if ($this->Etatpaiements->save($etatpaiement)) {
                $this->Flash->success(__('The etatpaiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etatpaiement could not be saved. Please, try again.'));
        }
        $this->set(compact('etatpaiement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Etatpaiement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etatpaiement = $this->Etatpaiements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etatpaiement = $this->Etatpaiements->patchEntity($etatpaiement, $this->request->getData());
            if ($this->Etatpaiements->save($etatpaiement)) {
                $this->Flash->success(__('The etatpaiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etatpaiement could not be saved. Please, try again.'));
        }
        $this->set(compact('etatpaiement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Etatpaiement id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etatpaiement = $this->Etatpaiements->get($id);
        if ($this->Etatpaiements->delete($etatpaiement)) {
            $this->Flash->success(__('The etatpaiement has been deleted.'));
        } else {
            $this->Flash->error(__('The etatpaiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
