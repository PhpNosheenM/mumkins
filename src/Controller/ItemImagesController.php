<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemImages Controller
 *
 * @property \App\Model\Table\ItemImagesTable $ItemImages
 *
 * @method \App\Model\Entity\ItemImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemImagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ItemRows']
        ];
        $itemImages = $this->paginate($this->ItemImages);

        $this->set(compact('itemImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Item Image id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemImage = $this->ItemImages->get($id, [
            'contain' => ['ItemRows']
        ]);

        $this->set('itemImage', $itemImage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemImage = $this->ItemImages->newEntity();
        if ($this->request->is('post')) {
            $itemImage = $this->ItemImages->patchEntity($itemImage, $this->request->getData());
            if ($this->ItemImages->save($itemImage)) {
                $this->Flash->success(__('The item image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item image could not be saved. Please, try again.'));
        }
        $itemRows = $this->ItemImages->ItemRows->find('list', ['limit' => 200]);
        $this->set(compact('itemImage', 'itemRows'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemImage = $this->ItemImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemImage = $this->ItemImages->patchEntity($itemImage, $this->request->getData());
            if ($this->ItemImages->save($itemImage)) {
                $this->Flash->success(__('The item image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item image could not be saved. Please, try again.'));
        }
        $itemRows = $this->ItemImages->ItemRows->find('list', ['limit' => 200]);
        $this->set(compact('itemImage', 'itemRows'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemImage = $this->ItemImages->get($id);
        if ($this->ItemImages->delete($itemImage)) {
            $this->Flash->success(__('The item image has been deleted.'));
        } else {
            $this->Flash->error(__('The item image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
