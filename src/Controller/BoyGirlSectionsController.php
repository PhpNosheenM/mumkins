<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BoyGirlSections Controller
 *
 * @property \App\Model\Table\BoyGirlSectionsTable $BoyGirlSections
 *
 * @method \App\Model\Entity\BoyGirlSection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BoyGirlSectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('index_layout');
        $boyGirlSection = $this->BoyGirlSections->newEntity();
        if ($this->request->is('post')) {
            $boyGirlSection = $this->BoyGirlSections->patchEntity($boyGirlSection, $this->request->getData());
            $file = $this->request->data['bg_image']; //put the data into a var for easy use
                       // pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/BG/' . $img_name);

                                //prepare the filename for database entry
                                $boyGirlSection->bg_image = $img_name;

                        }
            if ($this->BoyGirlSections->save($boyGirlSection)) {
                $this->Flash->success(__('The boy girl section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boy girl section could not be saved. Please, try again.'));
        }
        $bg_views=$this->BoyGirlSections->find()->where(['is_deleted'=>0]);
        $this->set(compact('boyGirlSection','bg_views'));
    }

    /**
     * View method
     *
     * @param string|null $id Boy Girl Section id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $boyGirlSection = $this->BoyGirlSections->get($id, [
            'contain' => []
        ]);

        $this->set('boyGirlSection', $boyGirlSection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('index_layout');
        $boyGirlSection = $this->BoyGirlSections->newEntity();
        if ($this->request->is('post')) {
            $boyGirlSection = $this->BoyGirlSections->patchEntity($boyGirlSection, $this->request->getData());
            if ($this->BoyGirlSections->save($boyGirlSection)) {
                $this->Flash->success(__('The boy girl section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boy girl section could not be saved. Please, try again.'));
        }
        $this->set(compact('boyGirlSection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Boy Girl Section id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
         $this->viewBuilder()->layout('index_layout');
        $boyGirlSection = $this->BoyGirlSections->get($id, [
            'contain' => []
        ]);
        $image=$boyGirlSection->bg_image;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $boyGirlSection = $this->BoyGirlSections->patchEntity($boyGirlSection, $this->request->getData());

             if($this->request->data['bg_image']['name'] == null)
            {
                //pr('sc');
             
                $boyGirlSection->bg_image=$image;
            }
           // pr($sliderSections);exit;
            else
            {

            $file = $this->request->data['bg_image']; //put the data into a var for easy use
                       // pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/BG/' . $img_name);

                                //prepare the filename for database entry
                                $boyGirlSection->bg_image = $img_name;

                        }
                }
            if ($this->BoyGirlSections->save($boyGirlSection)) {
                $this->Flash->success(__('The boy girl section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The boy girl section could not be saved. Please, try again.'));
        }
        $this->set(compact('boyGirlSection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Boy Girl Section id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $boyGirlSection = $this->BoyGirlSections->get($id);
        $boyGirlSection->is_deleted=1;
        if ($this->BoyGirlSections->save($boyGirlSection)) {
            $this->Flash->success(__('The boy girl section has been deleted.'));
        } else {
            $this->Flash->error(__('The boy girl section could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
