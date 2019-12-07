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
	   	$customer_id=$this->request->query('customer_id');
		$item_id=$this->request->query('item_id');
		$item_row_id=$this->request->query('item_row_id');

		$duplicate=$this->Wishlists->find()->where(['customer_id'=>$customer_id,'item_id'=>$item_id,'item_row_id'=>$item_row_id])->toArray();
		if($duplicate)
		{
			//pr("Item Alread added to your wishlist");
		}
		else
		{
			$wishlist = $this->Wishlists->newEntity();
			$wishlist->item_id=$item_id;
			$wishlist->item_row_id=$item_row_id;
			$wishlist->customer_id=$customer_id;
	            if ($this->Wishlists->save($wishlist)) {

				   $success = 'true';
				   $message = 'Item added to your wishlist';		
				   
				}else{
					$success = 'false';
					$message = 'Item not added to your wishlist';	
				}	
		}
		
		$this->set(compact('success','message'));
		$this->set('_serialize',['success','message']);
	   
	}
	public function wishlistview()
	{
		$customer_id=$this->request->query('customer_id');
		//pr($customer_id);exit;
		$wishlists=$this->Wishlists->find()->where(['customer_id'=>$customer_id])->contain(['Items','ItemRows']);
		//pr($wishlists);exit;
		$success = 'true';
		$message = 'Data Found';

		$FooterSections=$this->Wishlists->Items->FooterSections->find()->where(['FooterSections.is_deleted'=>0,'show_on'=>'Wishlist Page']);
		$this->set(compact('success','message','wishlists','FooterSections'));
		$this->set('_serialize',['success','message','wishlists','FooterSections']);
	}

	public function wishlistremove()
	{
		$id=$this->request->query('id');
		$wish_del=$this->Wishlists->get($id);
		if ($this->Wishlists->delete($wish_del)) {
           $success = 'true';
			$message = 'Item sucessfully removed from wishlists';
        } else {
            $success = 'false';
			$message = 'Item not removed from wishlists';
        }
        $this->set(compact('success','message'));
		$this->set('_serialize',['success','message']);
	}
	public function movetocart()
	{
		$id=$this->request->query('id');
		$item_id=$this->request->query('item_id');
		$item_row_id=$this->request->query('item_row_id');
		$customer_id=$this->request->query('customer_id');

		$wish_del=$this->Wishlists->get($id);
		$this->Wishlists->delete($wish_del);

		$item_rows=$this->Wishlists->Items->ItemRows->get($item_row_id);

		$cart=$this->Wishlists->Items->Carts->newEntity();
		$cart->item_id=$item_id;
		$cart->item_row_id=$item_row_id;
		$cart->customer_id=$customer_id;
		$cart->quantity=1;
		$cart->cart_count=1;
		$cart->rate=$item_rows->sale_rate;
		$cart->amount=$item_rows->sale_rate;
		$cart->add_from='Ecommerce';

        if ($this->Wishlists->Items->Carts->save($cart)) {

		   $success = 'true';
		   $message = 'Item added to your Cart';		
		   
		}else{
			$success = 'false';
			$message = 'Item not added to your Cart';	
		}
		//pr($cart);exit;

		$this->set(compact('success','message'));
		$this->set('_serialize',['success','message']);
	}
   
}
