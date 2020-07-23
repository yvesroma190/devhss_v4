<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CategorieArticles Controller
 *
 * @property \App\Model\Table\CategorieArticlesTable $CategorieArticles
 * @method \App\Model\Entity\CategorieArticle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategorieArticlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $categorieArticles = $this->paginate($this->CategorieArticles);

        $this->set(compact('categorieArticles'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorie Article id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorieArticle = $this->CategorieArticles->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('categorieArticle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categorieArticle = $this->CategorieArticles->newEmptyEntity();
        if ($this->request->is('post')) {
            $categorieArticle = $this->CategorieArticles->patchEntity($categorieArticle, $this->request->getData());
            if ($this->CategorieArticles->save($categorieArticle)) {
                $this->Flash->success(__('The categorie article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorie article could not be saved. Please, try again.'));
        }
        $this->set(compact('categorieArticle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorie Article id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categorieArticle = $this->CategorieArticles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorieArticle = $this->CategorieArticles->patchEntity($categorieArticle, $this->request->getData());
            if ($this->CategorieArticles->save($categorieArticle)) {
                $this->Flash->success(__('The categorie article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorie article could not be saved. Please, try again.'));
        }
        $this->set(compact('categorieArticle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorie Article id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorieArticle = $this->CategorieArticles->get($id);
        if ($this->CategorieArticles->delete($categorieArticle)) {
            $this->Flash->success(__('The categorie article has been deleted.'));
        } else {
            $this->Flash->error(__('The categorie article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
