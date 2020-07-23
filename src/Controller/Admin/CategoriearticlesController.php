<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Categoriearticles Controller
 *
 * @property \App\Model\Table\CategoriearticlesTable $Categoriearticles
 * @method \App\Model\Entity\Categoriearticle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriearticlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $categoriearticles = $this->paginate($this->Categoriearticles);

        $this->set(compact('categoriearticles'));
    }

    /**
     * View method
     *
     * @param string|null $id Categoriearticle id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriearticle = $this->Categoriearticles->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('categoriearticle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriearticle = $this->Categoriearticles->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoriearticle = $this->Categoriearticles->patchEntity($categoriearticle, $this->request->getData());
            if ($this->Categoriearticles->save($categoriearticle)) {
                $this->Flash->success(__('The categoriearticle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categoriearticle could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriearticle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categoriearticle id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriearticle = $this->Categoriearticles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriearticle = $this->Categoriearticles->patchEntity($categoriearticle, $this->request->getData());
            if ($this->Categoriearticles->save($categoriearticle)) {
                $this->Flash->success(__('The categoriearticle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categoriearticle could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriearticle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categoriearticle id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriearticle = $this->Categoriearticles->get($id);
        if ($this->Categoriearticles->delete($categoriearticle)) {
            $this->Flash->success(__('The categoriearticle has been deleted.'));
        } else {
            $this->Flash->error(__('The categoriearticle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
