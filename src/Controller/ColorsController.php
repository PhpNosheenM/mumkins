<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colors Controller
 *
 * @property \App\Model\Table\ColorsTable $Colors
 *
 * @method \App\Model\Entity\Color[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ColorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
		$this->viewBuilder()->layout('index_layout');
      
		$colordata = $this->Colors->newEntity();
        if ($this->request->is('post')) {
            $colordata = $this->Colors->patchEntity($colordata, $this->request->getData());
            if ($this->Colors->save($colordata)) {
                $this->Flash->success(__('The color has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The color could not be saved. Please, try again.'));
        }
		$colors = $this->Colors->find()->where(['Colors.flag'=>0]);
        $this->set(compact('colordata'));
        $this->set(compact('colors'));
    }

    /**
     * View method
     *
     * @param string|null $id Color id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $color = $this->Colors->get($id, [
            'contain' => []
        ]);
		
        $this->set('color', $color);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $color = $this->Colors->newEntity();
        if ($this->request->is('post')) {
            $color = $this->Colors->patchEntity($color, $this->request->getData());
            if ($this->Colors->save($color)) {
                $this->Flash->success(__('The color has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The color could not be saved. Please, try again.'));
        }
        $this->set(compact('color'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Color id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
		
        $color = $this->Colors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $color = $this->Colors->patchEntity($color, $this->request->getData());
            if ($this->Colors->save($color)) {
                $this->Flash->success(__('The color has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The color could not be saved. Please, try again.'));
        }
        $this->set(compact('color'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Color id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $color = $this->Colors->get($id);
		$color->flag=1;
        if ($this->Colors->save($color)) {
            $this->Flash->success(__('The color has been deleted.'));
        } else {
            $this->Flash->error(__('The color could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
