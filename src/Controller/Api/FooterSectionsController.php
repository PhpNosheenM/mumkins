<?php
namespace App\Controller\Api;
use App\Controller\Api\AppController;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 *
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FooterSectionsController extends AppController
{
    public function footerdata()
    {
    	$show_on=$this->request->query('show_on');
		
		if(!empty($show_on))
		{
			$footerdata = $this->FooterSections->find()->where(['is_deleted'=>0,'show_on'=>$show_on]);
		}
		$status = true;
		$message = 'Success';
		
		$this->set(compact('success','message','footerdata'));
		$this->set('_serialize',['success','message','footerdata']);		 
    } 
}
