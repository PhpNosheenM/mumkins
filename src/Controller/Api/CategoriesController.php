<?php
namespace App\Controller\Api;
use App\Controller\Api\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 *
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
   public function categoryitem(){
	    $sort="ASC";
	    $category_id=$this->request->query('category_id');
		$sub_category_id= @$this->request->query('sub_category_id');
		$price= @$this->request->query('price');
		$color= @$this->request->query('color');
		$size= @$this->request->query('size');
		$sort= @$this->request->query('sort');
		$conditions=[];
			if(!empty($size)){
				 $conditions[]=['ItemRows.size_id'=>$size];
			   }
			 if(!empty($color)){
				 $conditions[]=['ItemRows.color_id'=>$color];
			   }
			   
			 if(!empty($price)){
					$prices=explode('-',$price);
					 $conditions[]=['ItemRows.sale_rate >= '=>$prices[0]];
					 $conditions[]=['ItemRows.sale_rate <= '=>$prices[1]];
				};
			
			//pr($conditions); exit;
			 
		if(!empty($category_id)){
			
			$Categories=$this->Categories->get($category_id,['contain'=>['ChildCategories']]);
			foreach($Categories->child_categories as $child){
				$subcategory_id[]=$child->id;
			}
			
			$Sizes=$this->Categories->Sizes->find('list')->where(['Sizes.flag'=>0]);
			$Colors=$this->Categories->Colors->find('list')->where(['Colors.flag'=>0]);
			
			$FooterSections=$this->Categories->FooterSections->find()->where(['FooterSections.is_deleted'=>0,'show_on'=>'Category Page']);
			
			$Itemlist=$this->Categories->Items->find()->where(['Items.category_id IN'=>$subcategory_id]);
			//$Itemlist->contain(['ItemRows'=>['Colors','Sizes','ItemImages']]);
			$Itemlist->contain(['ItemRows'=>function($q) use($conditions){
				return $q->where($conditions)->contain(['Colors','Sizes','ItemImages']);
			}]);
			
			if(!empty($sub_category_id)){
				$Itemlist->where(['Items.category_id'=>$sub_category_id]);
				
			}
			
			if(!empty($sort)){
				$Itemlist->order(['Items.name'=>$sort]);
				
			}
			
			 // echo $size;
			   
			$success = true;
			$message = 'Data Found';
			
		}else{
			 $success = false;
			 $message = 'Empty category id';
			
		}
	   		
		
		$this->set(compact('success','message','Categories','Sizes','Colors','Itemlist','FooterSections'));
		$this->set('_serialize',['success','message','Categories','Sizes','Colors','Itemlist','FooterSections']);
		
	   
   }
   
}
