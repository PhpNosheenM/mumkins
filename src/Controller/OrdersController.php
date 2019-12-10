<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 *
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('index_layout');
        // $this->paginate = [
        //     'contain' => ['Customers', 'CustomerAddresses', 'DeliveryCharges', 'PromoCodes', 'Trackings']
        // ];
        // $orders = $this->paginate($this->Orders);

        $orders=$this->Orders->find()->contain(['Customers','CustomerAddresses']);

        $this->set(compact('orders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Customers', 'CustomerAddresses', 'DeliveryCharges', 'PromoCodes', 'Trackings', 'OrderDetails']
        ]);

        $this->set('order', $order);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $customers = $this->Orders->Customers->find('list', ['limit' => 200]);
        $customerAddresses = $this->Orders->CustomerAddresses->find('list', ['limit' => 200]);
        $deliveryCharges = $this->Orders->DeliveryCharges->find('list', ['limit' => 200]);
        $promoCodes = $this->Orders->PromoCodes->find('list', ['limit' => 200]);
        $trackings = $this->Orders->Trackings->find('list', ['limit' => 200]);
        $this->set(compact('order', 'customers', 'customerAddresses', 'deliveryCharges', 'promoCodes', 'trackings'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $customers = $this->Orders->Customers->find('list', ['limit' => 200]);
        $customerAddresses = $this->Orders->CustomerAddresses->find('list', ['limit' => 200]);
        $deliveryCharges = $this->Orders->DeliveryCharges->find('list', ['limit' => 200]);
        $promoCodes = $this->Orders->PromoCodes->find('list', ['limit' => 200]);
        $trackings = $this->Orders->Trackings->find('list', ['limit' => 200]);
        $this->set(compact('order', 'customers', 'customerAddresses', 'deliveryCharges', 'promoCodes', 'trackings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
