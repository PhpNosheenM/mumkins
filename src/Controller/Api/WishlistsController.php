<?php
namespace App\Controller\Api;
use App\Controller\Api\AppController;

/**
 * Homes Controller
 *
 * @property \App\Model\Table\HomesTable $Homes
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WishlistsController extends AppController
{
   
   
   public function wishlistadd(){
	   
		  $wishlist = $this->Wishlists->newEntity();
        if ($this->request->is('post')) {

            $wishlist = $this->Wishlists->patchEntity($wishlist, $this->request->getData());
            if ($this->Wishlists->save($wishlist)) {

			   $success = 'true';
			   $message = 'Item added to your wishlist';		
			   
			}else{
				$success = 'false';
				$message = 'Item not added to your wishlist';	
			}	
			//pr($wishlist);exit;
		}

		$this->set(compact('success','message'));
		$this->set('_serialize',['success','message']);
	   
	}
	public function wishlistview()
	{
		$customer_id=$this->request->query('customer_id');
		//pr($customer_id);exit;
		$wishlists=$this->Wishlists->find()->where(['customer_id'=>$customer_id])->contain(['Items','ItemRows'])->first();
		//pr($wishlists);exit;
		$success = 'true';
		$message = 'Data Found';
		$this->set(compact('success','message','wishlists'));
		$this->set('_serialize',['success','message','wishlists']);
	}
   
}
