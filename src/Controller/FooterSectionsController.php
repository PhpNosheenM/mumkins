<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FooterSections Controller
 *
 * @property \App\Model\Table\FooterSectionsTable $FooterSections
 *
 * @method \App\Model\Entity\FooterSection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FooterSectionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('index_layout');
        
        $footerSection = $this->FooterSections->newEntity();
        if ($this->request->is('post')) {
            $footerSection = $this->FooterSections->patchEntity($footerSection, $this->request->getData());
            if ($this->FooterSections->save($footerSection)) {
                $this->Flash->success(__('The footer section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('The footer section could not be saved. Please, try again.'));
        }
        $footer_views=$this->FooterSections->find()->where(['is_deleted'=>0]);
       // pr($footer_views->toArray());exit;
        $this->set(compact('footerSection','footer_views'));
    }

    /**
     * View method
     *
     * @param string|null $id Footer Section id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $footerSection = $this->FooterSections->get($id, [
            'contain' => []
        ]);

        $this->set('footerSection', $footerSection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $footerSection = $this->FooterSections->newEntity();
        if ($this->request->is('post')) {
            $footerSection = $this->FooterSections->patchEntity($footerSection, $this->request->getData());
            if ($this->FooterSections->save($footerSection)) {
                $this->Flash->success(__('The footer section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The footer section could not be saved. Please, try again.'));
        }
        $this->set(compact('footerSection'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Footer Section id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
         $this->viewBuilder()->layout('index_layout');
        $footerSection = $this->FooterSections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $footerSection = $this->FooterSections->patchEntity($footerSection, $this->request->getData());
            if ($this->FooterSections->save($footerSection)) {
                $this->Flash->success(__('The footer section has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The footer section could not be saved. Please, try again.'));
        }
        $this->set(compact('footerSection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Footer Section id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $footerSection = $this->FooterSections->get($id);
        if ($this->FooterSections->delete($footerSection)) {
            $this->Flash->success(__('The footer section has been deleted.'));
        } else {
            $this->Flash->error(__('The footer section could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
