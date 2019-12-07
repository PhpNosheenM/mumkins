<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NewsletterSections Controller
 *
 * @property \App\Model\Table\NewsletterSectionsTable $NewsletterSections
 *
 * @method \App\Model\Entity\NewsletterSection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsletterSectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
       $this->viewBuilder()->layout('index_layout');
        $newsletterSection = $this->NewsletterSections->newEntity();
        if ($this->request->is('post')) {
            $newsletterSection = $this->NewsletterSections->patchEntity($newsletterSection, $this->request->getData());
            $file = $this->request->data['news_image']; //put the data into a var for easy use
                       // pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                //move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/News/' . $img_name);

                                $keyname = 'News/' .$img_name;
                                $this->AwsFile->putObjectFile($keyname,$file['tmp_name'],$file['type']);

                                //prepare the filename for database entry
                                $newsletterSection->news_image = 'News/'.$img_name;

                        }
            if ($this->NewsletterSections->save($newsletterSection)) {
                $this->Flash->success(__('The newsletter section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter section could not be saved. Please, try again.'));
        }
        $news_views=$this->NewsletterSections->find()->where(['is_deleted'=>0]);
        $this->set(compact('newsletterSection','news_views'));
    }

    /**
     * View method
     *
     * @param string|null $id Newsletter Section id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newsletterSection = $this->NewsletterSections->get($id, [
            'contain' => []
        ]);

        $this->set('newsletterSection', $newsletterSection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('index_layout');
        $newsletterSection = $this->NewsletterSections->newEntity();
        if ($this->request->is('post')) {
            $newsletterSection = $this->NewsletterSections->patchEntity($newsletterSection, $this->request->getData());
            if ($this->NewsletterSections->save($newsletterSection)) {
                $this->Flash->success(__('The newsletter section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter section could not be saved. Please, try again.'));
        }
        $this->set(compact('newsletterSection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Newsletter Section id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
         $this->viewBuilder()->layout('index_layout');
        $newsletterSection = $this->NewsletterSections->get($id, [
            'contain' => []
        ]);
        $image=$newsletterSection->news_image;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newsletterSection = $this->NewsletterSections->patchEntity($newsletterSection, $this->request->getData());

             if($this->request->data['news_image']['name'] == null)
            {
                //pr('sc');
             
                $newsletterSection->news_image=$image;
            }
           // pr($sliderSections);exit;
            else
            {
             $file = $this->request->data['news_image']; //put the data into a var for easy use
                       // pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                //move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/News/' . $img_name);
                                $keyname = 'News/' .$img_name;
                                $this->AwsFile->putObjectFile($keyname,$file['tmp_name'],$file['type']);
                                //prepare the filename for database entry
                                $newsletterSection->news_image = 'News/'.$img_name;

                        }
                    }
            if ($this->NewsletterSections->save($newsletterSection)) {
                $this->Flash->success(__('The newsletter section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter section could not be saved. Please, try again.'));
        }
        $this->set(compact('newsletterSection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Newsletter Section id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newsletterSection = $this->NewsletterSections->get($id);
        $newsletterSection->is_deleted=1;
        if ($this->NewsletterSections->save($newsletterSection)) {
            $this->Flash->success(__('The newsletter section has been deleted.'));
        } else {
            $this->Flash->error(__('The newsletter section could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
