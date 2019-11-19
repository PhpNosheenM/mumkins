<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OfferSections Controller
 *
 * @property \App\Model\Table\OfferSectionsTable $OfferSections
 *
 * @method \App\Model\Entity\OfferSection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OfferSectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('index_layout');
        $offerSection = $this->OfferSections->newEntity();
        if ($this->request->is('post')) {
            $offerSection = $this->OfferSections->patchEntity($offerSection, $this->request->getData());

                        $file = $this->request->data['offer_image']; //put the data into a var for easy use
                       // pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/offers/' . $img_name);

                                //prepare the filename for database entry
                                $offerSection->offer_image = 'offers/'.$img_name;

                        }

            if ($this->OfferSections->save($offerSection)) {
             
                $this->Flash->success(__('The offer section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offer section could not be saved. Please, try again.'));
        }
        $offer_views=$this->OfferSections->find()->where(['is_deleted'=>'0']);
        $this->set(compact('offerSection','offer_views'));
    }

    /**
     * View method
     *
     * @param string|null $id Offer Section id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offerSection = $this->OfferSections->get($id, [
            'contain' => []
        ]);

        $this->set('offerSection', $offerSection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('index_layout');
        $offerSection = $this->OfferSections->newEntity();
        if ($this->request->is('post')) {
            $offerSection = $this->OfferSections->patchEntity($offerSection, $this->request->getData());

            if ($this->OfferSections->save($offerSection)) {
                $this->Flash->success(__('The offer section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offer section could not be saved. Please, try again.'));
        }
        $this->set(compact('offerSection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Offer Section id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('index_layout');
        $offerSection = $this->OfferSections->get($id, [
            'contain' => []
        ]);
        $image=$offerSection->offer_image;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offerSection = $this->OfferSections->patchEntity($offerSection, $this->request->getData());
             if($this->request->data['offer_image']['name'] == null)
            {
                //pr('sc');
             
                $offerSection->offer_image=$image;
            }
           // pr($sliderSections);exit;
            else
            {
             $file = $this->request->data['offer_image']; //put the data into a var for easy use
                       // pr($file);exit;
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif','png','jpg','jpeg'); //set allowed extensions
                        //only process if the extension is valid
                        $setNewFileName = uniqid();
                        $img_name= $setNewFileName.'.'.$ext;
                        if(in_array($ext, $arr_ext))
                        {
                           // pr("sds");exit;
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/offers/' . $img_name);

                                //prepare the filename for database entry
                                $offerSection->offer_image = 'offers/'.$img_name;

                        }
                    }
            if ($this->OfferSections->save($offerSection)) {
                $this->Flash->success(__('The offer section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The offer section could not be saved. Please, try again.'));
        }
        $this->set(compact('offerSection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Offer Section id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offerSection = $this->OfferSections->get($id);
        $offerSection->is_deleted=1;
        if ($this->OfferSections->save($offerSection)) {
            $this->Flash->success(__('The offer section has been deleted.'));
        } else {
            $this->Flash->error(__('The offer section could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
