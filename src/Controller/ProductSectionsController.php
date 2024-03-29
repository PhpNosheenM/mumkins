<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductSections Controller
 *
 * @property \App\Model\Table\ProductSectionsTable $ProductSections
 *
 * @method \App\Model\Entity\ProductSection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductSectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('index_layout');
        $productSection = $this->ProductSections->newEntity();
        if ($this->request->is('post')) {
            $data=$this->request->getData('product_section');
            $productSection = $this->ProductSections->newEntities($data);
           // pr($productSection);exit;
            if ($this->ProductSections->saveMany($productSection)) {
                $this->Flash->success(__('The product section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product section could not be saved. Please, try again.'));
        }
        $item_option = $this->ProductSections->Items->find()
        ->contain(['Categories'])
        ->where(['Items.is_deleted'=>0]);
        //pr($item_option->toArray());exit;
        $name="";
        foreach ($item_option as $option) {
             $name=$option->category->name.' >'.$option->name;
            $items[$option->id] = $name;
        }
        //pr($items);exit;
        $product_views=$this->ProductSections->find()->where(['ProductSections.is_deleted'=>0])->contain(['Items']);
        $this->set(compact('productSection', 'items','product_views'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Section id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productSection = $this->ProductSections->get($id, [
            'contain' => ['Items']
        ]);

        $this->set('productSection', $productSection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('index_layout');
        $productSection = $this->ProductSections->newEntity();
        if ($this->request->is('post')) {
            $productSection = $this->ProductSections->patchEntity($productSection, $this->request->getData());
            if ($this->ProductSections->save($productSection)) {
                $this->Flash->success(__('The product section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product section could not be saved. Please, try again.'));
        }
        $items = $this->ProductSections->Items->find('list', ['limit' => 200]);
        $this->set(compact('productSection', 'items'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Section id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('index_layout');
        $productSection = $this->ProductSections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productSection = $this->ProductSections->patchEntity($productSection, $this->request->getData());
            if ($this->ProductSections->save($productSection)) {
                $this->Flash->success(__('The product section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product section could not be saved. Please, try again.'));
        }
        $items = $this->ProductSections->Items->find('list', ['limit' => 200]);
        $this->set(compact('productSection', 'items'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Section id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productSection = $this->ProductSections->get($id);
        $productSection->is_deleted=1;
        if ($this->ProductSections->save($productSection)) {
            $this->Flash->success(__('The product section has been deleted.'));
        } else {
            $this->Flash->error(__('The product section could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
