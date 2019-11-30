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
	   
	    $category_id=$this->request->query('category_id');
		if(!empty($category_id)){
			
			$Categories=$this->Categories->get($category_id,['contain'=>['ChildCategories']]);
			foreach($Categories->child_categories as $child){
				$subcategory_id[]=$child->id;
			}
			
			$Sizes=$this->Categories->Sizes->find('list')->where(['Sizes.flag'=>0]);
			$Colors=$this->Categories->Colors->find('list')->where(['Colors.flag'=>0]);
			
			$FooterSections=$this->Categories->FooterSections->find()->where(['FooterSections.is_deleted'=>0,'show_on'=>'Category Page']);
			
			$Itemlist=$this->Categories->Items->find()->where(['Items.category_id IN'=>$subcategory_id]);
			$Itemlist->contain(['ItemRows'=>['Colors','Sizes','ItemImages']]);
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
