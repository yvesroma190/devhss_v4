<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Souscriptions Controller
 *
 * @property \App\Model\Table\SouscriptionsTable $Souscriptions
 * @method \App\Model\Entity\Souscription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SouscriptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Offres', 'Periodes'],
        ];
        $souscriptions = $this->paginate($this->Souscriptions);

        $this->set(compact('souscriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Souscription id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $souscription = $this->Souscriptions->get($id, [
            'contain' => ['Clients', 'Offres', 'Periodes', 'Paiements'],
        ]);

        $this->set(compact('souscription'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $souscription = $this->Souscriptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $souscription = $this->Souscriptions->patchEntity($souscription, $this->request->getData());
            if ($this->Souscriptions->save($souscription)) {
                $this->Flash->success(__('The souscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscription could not be saved. Please, try again.'));
        }
        $clients = $this->Souscriptions->Clients->find('list', ['limit' => 200]);
        $offres = $this->Souscriptions->Offres->find('list', ['limit' => 200]);
        $periodes = $this->Souscriptions->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('souscription', 'clients', 'offres', 'periodes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Souscription id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $souscription = $this->Souscriptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $souscription = $this->Souscriptions->patchEntity($souscription, $this->request->getData());
            if ($this->Souscriptions->save($souscription)) {
                $this->Flash->success(__('The souscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscription could not be saved. Please, try again.'));
        }
        $clients = $this->Souscriptions->Clients->find('list', ['limit' => 200]);
        $offres = $this->Souscriptions->Offres->find('list', ['limit' => 200]);
        $periodes = $this->Souscriptions->Periodes->find('list', ['limit' => 200]);
        $this->set(compact('souscription', 'clients', 'offres', 'periodes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Souscription id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $souscription = $this->Souscriptions->get($id);
        if ($this->Souscriptions->delete($souscription)) {
            $this->Flash->success(__('The souscription has been deleted.'));
        } else {
            $this->Flash->error(__('The souscription could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
