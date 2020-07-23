<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Periodes Controller
 *
 * @property \App\Model\Table\PeriodesTable $Periodes
 * @method \App\Model\Entity\Periode[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeriodesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $periodes = $this->paginate($this->Periodes);

        $this->set(compact('periodes'));
    }

    /**
     * View method
     *
     * @param string|null $id Periode id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $periode = $this->Periodes->get($id, [
            'contain' => ['Souscriptions'],
        ]);

        $this->set(compact('periode'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $periode = $this->Periodes->newEmptyEntity();
        if ($this->request->is('post')) {
            $periode = $this->Periodes->patchEntity($periode, $this->request->getData());
            if ($this->Periodes->save($periode)) {
                $this->Flash->success(__('The periode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periode could not be saved. Please, try again.'));
        }
        $this->set(compact('periode'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Periode id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $periode = $this->Periodes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $periode = $this->Periodes->patchEntity($periode, $this->request->getData());
            if ($this->Periodes->save($periode)) {
                $this->Flash->success(__('The periode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periode could not be saved. Please, try again.'));
        }
        $this->set(compact('periode'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Periode id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $periode = $this->Periodes->get($id);
        if ($this->Periodes->delete($periode)) {
            $this->Flash->success(__('The periode has been deleted.'));
        } else {
            $this->Flash->error(__('The periode could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
