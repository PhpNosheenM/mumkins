<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerAddresses Controller
 *
 * @property \App\Model\Table\CustomerAddressesTable $CustomerAddresses
 *
 * @method \App\Model\Entity\CustomerAddress[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerAddressesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States', 'Cities', 'Customers']
        ];
        $customerAddresses = $this->paginate($this->CustomerAddresses);

        $this->set(compact('customerAddresses'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Address id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerAddress = $this->CustomerAddresses->get($id, [
            'contain' => ['States', 'Cities', 'Customers']
        ]);

        $this->set('customerAddress', $customerAddress);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerAddress = $this->CustomerAddresses->newEntity();
        if ($this->request->is('post')) {
            $customerAddress = $this->CustomerAddresses->patchEntity($customerAddress, $this->request->getData());
            if ($this->CustomerAddresses->save($customerAddress)) {
                $this->Flash->success(__('The customer address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer address could not be saved. Please, try again.'));
        }
        $states = $this->CustomerAddresses->States->find('list', ['limit' => 200]);
        $cities = $this->CustomerAddresses->Cities->find('list', ['limit' => 200]);
        $customers = $this->CustomerAddresses->Customers->find('list', ['limit' => 200]);
        $this->set(compact('customerAddress', 'states', 'cities', 'customers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Address id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerAddress = $this->CustomerAddresses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerAddress = $this->CustomerAddresses->patchEntity($customerAddress, $this->request->getData());
            if ($this->CustomerAddresses->save($customerAddress)) {
                $this->Flash->success(__('The customer address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer address could not be saved. Please, try again.'));
        }
        $states = $this->CustomerAddresses->States->find('list', ['limit' => 200]);
        $cities = $this->CustomerAddresses->Cities->find('list', ['limit' => 200]);
        $customers = $this->CustomerAddresses->Customers->find('list', ['limit' => 200]);
        $this->set(compact('customerAddress', 'states', 'cities', 'customers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Address id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerAddress = $this->CustomerAddresses->get($id);
        if ($this->CustomerAddresses->delete($customerAddress)) {
            $this->Flash->success(__('The customer address has been deleted.'));
        } else {
            $this->Flash->error(__('The customer address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
