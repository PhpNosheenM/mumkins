<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BannerSections Controller
 *
 * @property \App\Model\Table\BannerSectionsTable $BannerSections
 *
 * @method \App\Model\Entity\BannerSection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BannerSectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
         $this->viewBuilder()->layout('index_layout');
        $bannerSection = $this->BannerSections->newEntity();
        if ($this->request->is('post')) {
            $bannerSection = $this->BannerSections->patchEntity($bannerSection, $this->request->getData());
            //pr($bannerSection);
            $file = $this->request->data['background_image']; //put the data into a var for easy use
                        //pr($file);
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/Banners/' . $img_name);

                                //prepare the filename for database entry
                                $bannerSection->background_image = 'Banners/'.$img_name;

                        }

            $file1= $this->request->data['hero_image']; //put the data into a var for easy use
                        //pr($file1);
                        $ext1 = substr(strtolower(strrchr($file1['name'], '.')), 1); //get the extension
                        $arr_ext1 = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName1 = uniqid();
                        $img_name1= $setNewFileName1.'.'.$ext1;
                        if(in_array($ext1, $arr_ext1))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file1['tmp_name'], WWW_ROOT . 'img/Banners/' . $img_name1);

                                //prepare the filename for database entry
                                $bannerSection->hero_image = 'Banners/'$img_name1;

                        }

                        //pr($bannerSection);exit;
            if ($this->BannerSections->save($bannerSection)) {
                $this->Flash->success(__('The banner section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banner section could not be saved. Please, try again.'));
        }
        $banner_views=$this->BannerSections->find()->where(['is_deleted'=>0]);
        $this->set(compact('bannerSection','banner_views'));
    }

    /**
     * View method
     *
     * @param string|null $id Banner Section id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bannerSection = $this->BannerSections->get($id, [
            'contain' => []
        ]);

        $this->set('bannerSection', $bannerSection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('index_layout');
        $bannerSection = $this->BannerSections->newEntity();
        if ($this->request->is('post')) {
            $bannerSection = $this->BannerSections->patchEntity($bannerSection, $this->request->getData());
            if ($this->BannerSections->save($bannerSection)) {
                $this->Flash->success(__('The banner section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banner section could not be saved. Please, try again.'));
        }
        $this->set(compact('bannerSection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner Section id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('index_layout');
        $bannerSection = $this->BannerSections->get($id, [
            'contain' => []
        ]);
        $image=$bannerSection->background_image;
        $image1=$bannerSection->hero_image;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bannerSection = $this->BannerSections->patchEntity($bannerSection, $this->request->getData());

             if($this->request->data['background_image']['name'] == null)
            {
                //pr('sc');
             
                $bannerSection->background_image=$image;
            }
           // pr($sliderSections);exit;
            else
            {
            $file = $this->request->data['background_image']; //put the data into a var for easy use
                        //pr($file);
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/Banners/' . $img_name);

                                //prepare the filename for database entry
                                $bannerSection->background_image = 'Banners/'.$img_name;

                        }
            }

             if($this->request->data['hero_image']['name'] == null)
            {
                //pr('sc');
             
                $bannerSection->hero_image=$image1;
            }
           // pr($sliderSections);exit;
            else
            {

            $file1= $this->request->data['hero_image']; //put the data into a var for easy use
                        //pr($file1);
                        $ext1 = substr(strtolower(strrchr($file1['name'], '.')), 1); //get the extension
                        $arr_ext1 = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName1 = uniqid();
                        $img_name1= $setNewFileName1.'.'.$ext1;
                        if(in_array($ext1, $arr_ext1))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file1['tmp_name'], WWW_ROOT . 'img/Banners/' . $img_name1);

                                //prepare the filename for database entry
                                $bannerSection->hero_image ='Banners/'.$img_name1;

                        }
                }

            if ($this->BannerSections->save($bannerSection)) {
                 return $this->redirect(['action' => 'index']);
                $this->Flash->success(__('The banner section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banner section could not be saved. Please, try again.'));
        }
        $this->set(compact('bannerSection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner Section id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bannerSection = $this->BannerSections->get($id);
        $bannerSection->is_deleted=1;
        if ($this->BannerSections->save($bannerSection)) {
            $this->Flash->success(__('The banner section has been deleted.'));
        } else {
            $this->Flash->error(__('The banner section could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
