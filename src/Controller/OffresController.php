<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Offres Controller
 *
 * @property \App\Model\Table\OffresTable $Offres
 * @method \App\Model\Entity\Offre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OffresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $offres = $this->paginate($this->Offres, ['contain' => ['Materielinclus', 'Serviceinclus']]);

        //Chargement modeles supplementaires
        $this->loadModel('Materielinclus');
        $this->loadModel('Serviceinclus');

        $this->set(compact('offres'));
    }

    /**
     * View method
     *
     * @param string|null $id Offre id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offre = $this->Offres->get($id, [
            'contain' => ['Materielinclus', 'Paiements', 'Serviceinclus', 'Souscriptions'],
        ]);

        $this->set(compact('offre'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $offre = $this->Offres->newEmptyEntity();
        if ($this->request->is('post')) {
            $offre = $this->Offres->patchEntity($offre, $this->request->getData());
            if ($this->Offres->save($offre)) {
                $this->Flash->success(__('The offre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offre could not be saved. Please, try again.'));
        }
        $this->set(compact('offre'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Offre id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $offre = $this->Offres->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offre = $this->Offres->patchEntity($offre, $this->request->getData());
            if ($this->Offres->save($offre)) {
                $this->Flash->success(__('The offre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offre could not be saved. Please, try again.'));
        }
        $this->set(compact('offre'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Offre id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offre = $this->Offres->get($id);
        if ($this->Offres->delete($offre)) {
            $this->Flash->success(__('The offre has been deleted.'));
        } else {
            $this->Flash->error(__('The offre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
