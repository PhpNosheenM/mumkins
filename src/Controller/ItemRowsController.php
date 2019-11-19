<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemRows Controller
 *
 * @property \App\Model\Table\ItemRowsTable $ItemRows
 *
 * @method \App\Model\Entity\ItemRow[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemRowsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items', 'Colors', 'Sizes']
        ];
        $itemRows = $this->paginate($this->ItemRows);

        $this->set(compact('itemRows'));
    }

    /**
     * View method
     *
     * @param string|null $id Item Row id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemRow = $this->ItemRows->get($id, [
            'contain' => ['Items', 'Colors', 'Sizes', 'ItemImages']
        ]);

        $this->set('itemRow', $itemRow);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemRow = $this->ItemRows->newEntity();
        if ($this->request->is('post')) {
            $itemRow = $this->ItemRows->patchEntity($itemRow, $this->request->getData());
            if ($this->ItemRows->save($itemRow)) {
                $this->Flash->success(__('The item row has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item row could not be saved. Please, try again.'));
        }
        $items = $this->ItemRows->Items->find('list', ['limit' => 200]);
        $colors = $this->ItemRows->Colors->find('list', ['limit' => 200]);
        $sizes = $this->ItemRows->Sizes->find('list', ['limit' => 200]);
        $this->set(compact('itemRow', 'items', 'colors', 'sizes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item Row id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemRow = $this->ItemRows->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemRow = $this->ItemRows->patchEntity($itemRow, $this->request->getData());
            if ($this->ItemRows->save($itemRow)) {
                $this->Flash->success(__('The item row has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item row could not be saved. Please, try again.'));
        }
        $items = $this->ItemRows->Items->find('list', ['limit' => 200]);
        $colors = $this->ItemRows->Colors->find('list', ['limit' => 200]);
        $sizes = $this->ItemRows->Sizes->find('list', ['limit' => 200]);
        $this->set(compact('itemRow', 'items', 'colors', 'sizes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item Row id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemRow = $this->ItemRows->get($id);
        if ($this->ItemRows->delete($itemRow)) {
            $this->Flash->success(__('The item row has been deleted.'));
        } else {
            $this->Flash->error(__('The item row could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
