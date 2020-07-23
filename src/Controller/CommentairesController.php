<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Commentaires Controller
 *
 * @property \App\Model\Table\CommentairesTable $Commentaires
 * @method \App\Model\Entity\Commentaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommentairesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles', 'Clients'],
        ];
        $commentaires = $this->paginate($this->Commentaires);

        $this->set(compact('commentaires'));
    }

    /**
     * View method
     *
     * @param string|null $id Commentaire id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commentaire = $this->Commentaires->get($id, [
            'contain' => ['Articles', 'Clients'],
        ]);

        $this->set(compact('commentaire'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commentaire = $this->Commentaires->newEmptyEntity();
        if ($this->request->is('post')) {
            $commentaire = $this->Commentaires->patchEntity($commentaire, $this->request->getData());
            if ($this->Commentaires->save($commentaire)) {
                $this->Flash->success(__('The commentaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commentaire could not be saved. Please, try again.'));
        }
        $articles = $this->Commentaires->Articles->find('list', ['limit' => 200]);
        $clients = $this->Commentaires->Clients->find('list', ['limit' => 200]);
        $this->set(compact('commentaire', 'articles', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commentaire id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commentaire = $this->Commentaires->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commentaire = $this->Commentaires->patchEntity($commentaire, $this->request->getData());
            if ($this->Commentaires->save($commentaire)) {
                $this->Flash->success(__('The commentaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commentaire could not be saved. Please, try again.'));
        }
        $articles = $this->Commentaires->Articles->find('list', ['limit' => 200]);
        $clients = $this->Commentaires->Clients->find('list', ['limit' => 200]);
        $this->set(compact('commentaire', 'articles', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commentaire id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commentaire = $this->Commentaires->get($id);
        if ($this->Commentaires->delete($commentaire)) {
            $this->Flash->success(__('The commentaire has been deleted.'));
        } else {
            $this->Flash->error(__('The commentaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
