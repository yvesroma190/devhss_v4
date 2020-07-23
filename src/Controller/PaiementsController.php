<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Paiements Controller
 *
 * @property \App\Model\Table\PaiementsTable $Paiements
 * @method \App\Model\Entity\Paiement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaiementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Souscriptions', 'Offres', 'Etatpaiements'],
        ];
        $paiements = $this->paginate($this->Paiements);

        $this->set(compact('paiements'));
    }

    /**
     * View method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paiement = $this->Paiements->get($id, [
            'contain' => ['Clients', 'Souscriptions', 'Offres', 'Etatpaiements'],
        ]);

        $this->set(compact('paiement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paiement = $this->Paiements->newEmptyEntity();
        if ($this->request->is('post')) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $clients = $this->Paiements->Clients->find('list', ['limit' => 200]);
        $souscriptions = $this->Paiements->Souscriptions->find('list', ['limit' => 200]);
        $offres = $this->Paiements->Offres->find('list', ['limit' => 200]);
        $etatpaiements = $this->Paiements->Etatpaiements->find('list', ['limit' => 200]);
        $this->set(compact('paiement', 'clients', 'souscriptions', 'offres', 'etatpaiements'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paiement = $this->Paiements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $clients = $this->Paiements->Clients->find('list', ['limit' => 200]);
        $souscriptions = $this->Paiements->Souscriptions->find('list', ['limit' => 200]);
        $offres = $this->Paiements->Offres->find('list', ['limit' => 200]);
        $etatpaiements = $this->Paiements->Etatpaiements->find('list', ['limit' => 200]);
        $this->set(compact('paiement', 'clients', 'souscriptions', 'offres', 'etatpaiements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paiement = $this->Paiements->get($id);
        if ($this->Paiements->delete($paiement)) {
            $this->Flash->success(__('The paiement has been deleted.'));
        } else {
            $this->Flash->error(__('The paiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
