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
class ItemsController extends AppController
{
    public function itemlist()
    {
		//echo"hello";
		
		
			$success = false;
			$message = 'No Data Found';		
		
		
		$this->set(compact('success','message','list'));
		$this->set('_serialize',['success','message','list']);		 
    } 
}
