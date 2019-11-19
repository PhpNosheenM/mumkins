<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SliderSections Controller
 *
 * @property \App\Model\Table\SliderSectionsTable $SliderSections
 *
 * @method \App\Model\Entity\SliderSection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SliderSectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('index_layout');
        $sliderSection = $this->SliderSections->newEntity();
        if ($this->request->is('post')) {
            $sliderSection = $this->SliderSections->patchEntity($sliderSection, $this->request->getData());
             $file = $this->request->data['slider_image']; //put the data into a var for easy use
                       // pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/Sliders/' . $img_name);

                                //prepare the filename for database entry
                                $sliderSection->slider_image = 'Sliders/'.$img_name;

                        }

            if ($this->SliderSections->save($sliderSection)) {
                $this->Flash->success(__('The slider section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slider section could not be saved. Please, try again.'));
        }
        $slider_views=$this->SliderSections->find()->where(['is_deleted'=>0]);
        $this->set(compact('sliderSection','slider_views'));
    }

    /**
     * View method
     *
     * @param string|null $id Slider Section id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sliderSection = $this->SliderSections->get($id, [
            'contain' => []
        ]);

        $this->set('sliderSection', $sliderSection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('index_layout');
        $sliderSection = $this->SliderSections->newEntity();
        if ($this->request->is('post')) {
            $sliderSection = $this->SliderSections->patchEntity($sliderSection, $this->request->getData());
            if ($this->SliderSections->save($sliderSection)) {
                $this->Flash->success(__('The slider section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slider section could not be saved. Please, try again.'));
        }
        $this->set(compact('sliderSection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Slider Section id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('index_layout');
        $sliderSection = $this->SliderSections->get($id, [
            'contain' => []
        ]);
        $image=$sliderSection->slider_image;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sliderSections = $this->SliderSections->patchEntity($sliderSection, $this->request->getData());
            
            if($this->request->data['slider_image']['name'] == null)
            {
                //pr('sc');
             
                $sliderSections->slider_image=$image;
            }
           // pr($sliderSections);exit;
            else
            {
               //pr("cd");
                $file = $this->request->data['slider_image']; //put the data into a var for easy use
                       // pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/Sliders/' . $img_name);

                                //prepare the filename for database entry
                                $sliderSections->slider_image = 'Sliders/'.$img_name;

                        }
            }
            //pr($sliderSections);exit;
            if ($this->SliderSections->save($sliderSections)) {
                $this->Flash->success(__('The slider section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slider section could not be saved. Please, try again.'));
        }
        $this->set(compact('sliderSection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Slider Section id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sliderSection = $this->SliderSections->get($id);
        $sliderSection->is_deleted=1;
        if ($this->SliderSections->save($sliderSection)) {
            $this->Flash->success(__('The slider section has been deleted.'));
        } else {
            $this->Flash->error(__('The slider section could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
