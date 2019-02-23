<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equations Controller
 *
 * @property \App\Model\Table\EquationsTable $Equations
 *
 * @method \App\Model\Entity\Equation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EquationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $equations = $this->paginate($this->Equations);

        $this->set(compact('equations'));
    }

    /**
     * View method
     *
     * @param string|null $id Equation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equation = $this->Equations->get($id, [
            'contain' => ['Results']
        ]);

        $this->set('equation', $equation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equation = $this->Equations->newEntity();
        if ($this->request->is('post')) {
            $equation = $this->Equations->patchEntity($equation, $this->request->getData());
            if ($this->Equations->save($equation)) {
                $this->Flash->success(__('The equation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equation could not be saved. Please, try again.'));
        }
        $this->set(compact('equation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Equation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equation = $this->Equations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equation = $this->Equations->patchEntity($equation, $this->request->getData());
            if ($this->Equations->save($equation)) {
                $this->Flash->success(__('The equation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equation could not be saved. Please, try again.'));
        }
        $this->set(compact('equation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Equation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equation = $this->Equations->get($id);
        if ($this->Equations->delete($equation)) {
            $this->Flash->success(__('The equation has been deleted.'));
        } else {
            $this->Flash->error(__('The equation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
