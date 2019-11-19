<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategorySections Controller
 *
 * @property \App\Model\Table\CategorySectionsTable $CategorySections
 *
 * @method \App\Model\Entity\CategorySection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategorySectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
         $this->viewBuilder()->layout('index_layout');
        $categorySection = $this->CategorySections->newEntity();
        if ($this->request->is('post')) {
            $categorySection = $this->CategorySections->patchEntity($categorySection, $this->request->getData());

                        $file = $this->request->data['category_image']; //put the data into a var for easy use
                      // pr($file);
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                          // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/category/' . $img_name);

                                //prepare the filename for database entry
                                $categorySection->category_image = 'category/'.$img_name;

                        }
            if ($this->CategorySections->save($categorySection)) {
                $this->Flash->success(__('The category section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category section could not be saved. Please, try again.'));
        }
        $category_views=$this->CategorySections->find()->where(['is_deleted'=>0]);
        $this->set(compact('categorySection','category_views'));
    }

    /**
     * View method
     *
     * @param string|null $id Category Section id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorySection = $this->CategorySections->get($id, [
            'contain' => []
        ]);

        $this->set('categorySection', $categorySection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('index_layout');
        $categorySection = $this->CategorySections->newEntity();
        if ($this->request->is('post')) {
            $categorySection = $this->CategorySections->patchEntity($categorySection, $this->request->getData());
            if ($this->CategorySections->save($categorySection)) {
                $this->Flash->success(__('The category section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category section could not be saved. Please, try again.'));
        }
        $this->set(compact('categorySection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Category Section id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('index_layout');
        $categorySection = $this->CategorySections->get($id, [
            'contain' => []
        ]);
        $image=$categorySection->category_image;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorySection = $this->CategorySections->patchEntity($categorySection, $this->request->getData());

             if($this->request->data['category_image']['name'] == null)
            {
                //pr('sc');
             
                $categorySection->category_image=$image;
            }
           // pr($sliderSections);exit;
            else
            {
             $file = $this->request->data['category_image']; //put the data into a var for easy use
                       // pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/category/' . $img_name);

                                //prepare the filename for database entry
                                $categorySection->category_image = 'category/'.$img_name;

                        }
                }
            if ($this->CategorySections->save($categorySection)) {
                $this->Flash->success(__('The category section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category section could not be saved. Please, try again.'));
        }
        $this->set(compact('categorySection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category Section id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorySection = $this->CategorySections->get($id);
        $categorySection->is_deleted=1;
        if ($this->CategorySections->save($categorySection)) {
            $this->Flash->success(__('The category section has been deleted.'));
        } else {
            $this->Flash->error(__('The category section could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
