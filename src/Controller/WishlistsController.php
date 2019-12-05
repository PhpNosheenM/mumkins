<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wishlists Controller
 *
 * @property \App\Model\Table\WishlistsTable $Wishlists
 *
 * @method \App\Model\Entity\Wishlist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WishlistsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items', 'ItemRows', 'Customers']
        ];
        $wishlists = $this->paginate($this->Wishlists);

        $this->set(compact('wishlists'));
    }

    /**
     * View method
     *
     * @param string|null $id Wishlist id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wishlist = $this->Wishlists->get($id, [
            'contain' => ['Items', 'ItemRows', 'Customers']
        ]);

        $this->set('wishlist', $wishlist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wishlist = $this->Wishlists->newEntity();
        if ($this->request->is('post')) {
            $wishlist = $this->Wishlists->patchEntity($wishlist, $this->request->getData());
            if ($this->Wishlists->save($wishlist)) {
                $this->Flash->success(__('The wishlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
        }
        $items = $this->Wishlists->Items->find('list', ['limit' => 200]);
        $itemRows = $this->Wishlists->ItemRows->find('list', ['limit' => 200]);
        $customers = $this->Wishlists->Customers->find('list', ['limit' => 200]);
        $this->set(compact('wishlist', 'items', 'itemRows', 'customers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Wishlist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wishlist = $this->Wishlists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wishlist = $this->Wishlists->patchEntity($wishlist, $this->request->getData());
            if ($this->Wishlists->save($wishlist)) {
                $this->Flash->success(__('The wishlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
        }
        $items = $this->Wishlists->Items->find('list', ['limit' => 200]);
        $itemRows = $this->Wishlists->ItemRows->find('list', ['limit' => 200]);
        $customers = $this->Wishlists->Customers->find('list', ['limit' => 200]);
        $this->set(compact('wishlist', 'items', 'itemRows', 'customers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Wishlist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wishlist = $this->Wishlists->get($id);
        if ($this->Wishlists->delete($wishlist)) {
            $this->Flash->success(__('The wishlist has been deleted.'));
        } else {
            $this->Flash->error(__('The wishlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
