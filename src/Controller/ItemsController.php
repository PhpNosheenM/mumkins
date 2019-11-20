<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 *
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
     public function salesRateUpdate()
    {
        $this->viewBuilder()->layout('index_layout');
         $item_rows = $this->Items->ItemRows->newEntity();
        $items=$this->Items->ItemRows->find()->where(['is_deleted'=>0])->contain(['Items'=>['Categories']]);

        if ($this->request->is(['post', 'put'])) {
            $item_variation=$this->request->getData();
            //pr($item_variation);exit;
            foreach($item_variation['item_rows'] as $itemVariations){
                //pr($itemVariations['print_rate']);exit;
                $itemVariation=(object)$itemVariations;
                $query = $this->Items->ItemRows->query();
                    //$query->update(['promote_date', 'due_amount', amount', 'discount', 'end_date'])
                    $query->update()
                            ->set([
                            'print_rate' => $itemVariations['print_rate'],
                            'stock' => $itemVariations['stock'],
                            'discount' => $itemVariations['discount'],
                            'sale_rate' => $itemVariations['sale_rate']
                            ])
                            ->where(['id'=>$itemVariations['id']])
                    ->execute();
            }

            
            $this->Flash->success(__('Item rates have updated successfully.'));
        }


        $this->set(compact('items','item_rows'));
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $items = $this->paginate($this->Items);

        $this->set(compact('items'));
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Categories', 'ItemRows', 'ProductSections']
        ]);

        $this->set('item', $item);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('index_layout');
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
           // pr($this->request->getData());
             $images=$this->request->getData('item_rows');
            
            
                    //pr($img);exit;
            //$item['item_rows']->feature_image=$img;
            $item = $this->Items->patchEntity($item, $this->request->getData());
            $item->item_rows=[];
            //pr($item);exit;
            if ($this->Items->save($item)) {
               
          
            foreach ($images as $item_row) {
                 // pr($item_row['sku']);exit;
             $file = $item_row['feature_image']; //put the data into a var for easy use
                        //pr($file);
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/Items/' . $img_name);

                                //prepare the filename for database entry
                              $img[]= $img_name;
                              //pr($item->item_rows=$image);

                        }
                 $query = $this->Items->ItemRows->query();
                    $query->insert(['item_id', 'sku', 'color_id', 'size_id', 'quantity', 'sale_rate','feature_image'])
                    ->values([
                        'item_id' => $item->id,
                        'sku' => $item_row['sku'],
                        'color_id' => $item_row['color_id'],
                        'size_id' => $item_row['size_id'],
                        'quantity' => $item_row['quantity'],
                        'sale_rate' => $item_row['sale_rate'],
                        'feature_image' => 'images/'.$item->id.'/'.$item_row['feature_image']['name'],
                   ]);
                    $query->execute();
                }
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $categories = $this->Items->Categories->find('list');

        //pr($results->toArray());exit;
        $colors = $this->Items->ItemRows->Colors->find('list');
        $sizes = $this->Items->ItemRows->Sizes->find('list');
        $this->set(compact('item', 'categories','colors','sizes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $categories = $this->Items->Categories->find('list', ['limit' => 200]);
        $this->set(compact('item', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
