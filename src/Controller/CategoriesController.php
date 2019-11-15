<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 *
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
		$this->viewBuilder()->layout('index_layout');
		
		$category = $this->Categories->newEntity();
		
        if ($this->request->is('post')) {  //pr($category); exit;
			$this->request->data['status']='Active';
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));
				
                return $this->redirect(['action' => 'index']);
            }
				
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
		
		
        $this->paginate = [
            'contain' => ['ParentCategories']
        ];
        $categories = $this->Categories->find()->where(['Categories.status'=>'Active','parent_id IS'=>NULL]);

        $this->set(compact('categories','category'));
    }
	public function indexsub()
    {
		$this->viewBuilder()->layout('index_layout');
		
		$category = $this->Categories->newEntity();
		
		$parentcategory=$this->Categories->find('list')->where(['Categories.status'=>'Active','parent_id IS'=>NULL]);
		
        if($this->request->is('post')) { 
			$this->request->data['status']='Active';
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));
				
                return $this->redirect(['action' => 'indexsub']);
            }
				
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
		
		
        $this->paginate = [
            'contain' => ['ParentCategories']
        ];
        $categories = $this->Categories->find()->where(['Categories.status'=>'Active','Categories.parent_id IS NOT'=>NULL])->contain(['ParentCategories']);
		//pr($categories->toArray()); exit;
        $this->set(compact('categories','category','parentcategory'));
    }
	
	

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['ParentCategories', 'ChildCategories']
        ]);

        $this->set('category', $category);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
		
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $parentCategories = $this->Categories->ParentCategories->find('list', ['limit' => 200]);
        $this->set(compact('category', 'parentCategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $parentCategories = $this->Categories->ParentCategories->find('list', ['limit' => 200]);
        $this->set(compact('category', 'parentCategories'));
    }
	
	public function editsub($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'indexsub']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
		$parentcategory=$this->Categories->find('list')->where(['Categories.status'=>'Active','parent_id IS'=>NULL]);
		
       // $parentCategories = $this->Categories->ParentCategories->find('list', ['limit' => 200]);
        $this->set(compact('category', 'parentcategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
		$category->status='Deactive';
        if ($this->Categories->save($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('The category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    } 
	
	public function deletesub($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
		$category->status='Deactive';
        if ($this->Categories->save($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('The category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'indexsub']);
    }
}
