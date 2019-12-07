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
	
	public function addtocart(){
		
		$item_id=$this->request->query('item_id');
		$item_row_id=$this->request->query('item_row_id');
		$customer_id=$this->request->query('customer_id');
		if(!empty($item_id) and !empty($item_row_id)  and !empty($customer_id)){
			
			$ItemRows=$this->Items->ItemRows->get($item_row_id);
			
			$Carts=$this->Items->Carts->newEntity();
			$Carts->customer_id=$customer_id;
			$Carts->item_id=$item_id;
			$Carts->item_row_id=$item_row_id;
			$Carts->quantity=1;
			$Carts->rate=$ItemRows->sale_rate;
			$Carts->amount=$ItemRows->sale_rate;
			$Carts->cart_count=1;
			$Carts->add_from='ECOMMERSE';
			$this->Items->Carts->save($Carts);
			
			$Cartscount=$this->Items->Carts->find()->where(['customer_id'=>$customer_id])->count();
			
			$success = true;
			$message = 'Data Add successfully.';	
			
		}else{
			$success = false;
			$message = 'empty Item id or Item row id or customer_id.';	
			
		}
		
		$this->set(compact('success','message','list','Cartscount'));
		$this->set('_serialize',['success','message','list','Cartscount']);	
	}
	
	
	public function fetchtocart(){
		
		$customer_id=$this->request->query('customer_id');
		if(!empty($customer_id)){
			
			$Carts=$this->Items->Carts->find()->where(['customer_id'=>$customer_id]);
			$Cartstotal=$this->Items->Carts->find()->select(['total'=>'sum(rate)'])->where(['customer_id'=>$customer_id])->first();
			$Carttotal=$Cartstotal->total;
			$Cartscount=$this->Items->Carts->find()->where(['customer_id'=>$customer_id])->count();
			$success = true;
			$message = 'Data Add successfully.';
			
		}else{
			
			$success = false;
			$message = 'empty customer_id.';	
			
		}
		$this->set(compact('success','message','Carts','Carttotal','Cartscount'));
		$this->set('_serialize',['success','message','Carts','Carttotal','Cartscount']);	
		
	}
	
	
	
    public function itemlist()
    {
		//echo"hello";
		
		
			$success = false;
			$message = 'No Data Found';		
		
		
		$this->set(compact('success','message','list'));
		$this->set('_serialize',['success','message','list']);		 
    } 
	
	public function searchitem(){
		
		$search=$this->request->query('search');
		
		if(!empty($search)){
			
			$Items=$this->Items->find()->where(['Items.is_deleted'=>0,'Items.name Like' =>'%'.$search.'%'])->contain(['ItemRows'=>['Colors','Sizes','ItemImages']]);
			$Items->orwhere(['Items.is_deleted'=>0,'Items.item_keyword Like' =>'%'.$search.'%']);
			
			$success = true;
			$message = 'Data found';	
			
		}else{
			$success = false;
			$message = 'Empty search';	
		}
		
		$FooterSections=$this->Items->FooterSections->find()->where(['FooterSections.is_deleted'=>0,'show_on'=>'Home Page']);
		
		$this->set(compact('success','message','Items','FooterSections'));
		$this->set('_serialize',['success','message','Items','FooterSections']);	
		
		
	}
	
	public function itemdetails(){
		
		$item_id=$this->request->query('item_id');
		$item_row_id=$this->request->query('item_row_id');
		if(!empty($item_id)){
			
			//$Items=$this->Items->get($item_id,['contain'=>['ItemRows'=>['Colors','Sizes','ItemImages']]]);
			$Items=$this->Items->get($item_id,['contain'=>['ItemRows'=>function($q) use($item_row_id){
				return $q->where(['ItemRows.id'=>$item_row_id])->contain(['Colors','Sizes','ItemImages']);
			}]]);
			
			$ItemRows=$this->Items->ItemRows->find()->where(['item_id'=>$item_id])->contain(['Colors','Sizes','ItemImages'])->distinct(['color_id']);
			$Items->color=$ItemRows;
			
			$ItemRowsSizes=$this->Items->ItemRows->find()->where(['item_id'=>$item_id,'color_id'=>$Items->item_rows[0]->color_id])->contain(['Colors','Sizes','ItemImages']);
			
			$Items->size=$ItemRowsSizes;
			
			
			
			//// Related Item 
			
			
			
			$FooterSections=$this->Items->FooterSections->find()->where(['FooterSections.is_deleted'=>0,'show_on'=>'Product Details Page']);
			
			$Itemlist=$this->Items->find()->where(['Items.category_id'=>$Items->category_id,'Items.is_deleted'=>0]);
			$Itemlist->contain(['ItemRows'=>['Colors','Sizes','ItemImages']]);
			
			$success = true;
			$message = 'Data found';	
			
		}else{
			$success = false;
			$message = 'Empty item id';	
			
		}
		$this->set(compact('success','message','Items','FooterSections','Itemlist'));
		$this->set('_serialize',['success','message','Items','FooterSections','Itemlist']);	
	}
	
}
