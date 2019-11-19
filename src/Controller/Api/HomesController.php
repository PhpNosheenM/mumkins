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
class HomesController extends AppController
{
   
    public function homelist()
    {
		$Homes=$this->Homes->find()->where(['Homes.flag'=>0]);
		$homeScreen=[];
		foreach($Homes as $Home){
			
			$layout=$Home->layout;
			if($layout=='Slider Section'){
				$SliderSections=$this->Homes->SliderSections->find()->where(['SliderSections.is_deleted'=>0]);
				$homeScreen[]=['title'=>$Home->title,'layout'=>$layout,'Section'=>$SliderSections];
				
			}
			if($layout=='Offer Section'){
				$OfferSections=$this->Homes->OfferSections->find()->where(['OfferSections.is_deleted'=>0]);
				$homeScreen[]=['title'=>$Home->title,'layout'=>$layout,'Section'=>$OfferSections];
				
			}
			if($layout=='Category Section'){
				$CategorySections=$this->Homes->CategorySections->find()->where(['CategorySections.is_deleted'=>0]);
				$homeScreen[]=['title'=>$Home->title,'layout'=>$layout,'Section'=>$CategorySections];
				
			}
			if($layout=='Boy Girl Section'){
				$BoyGirlSections=$this->Homes->BoyGirlSections->find()->where(['BoyGirlSections.is_deleted'=>0]);
				$homeScreen[]=['title'=>$Home->title,'layout'=>$layout,'Section'=>$BoyGirlSections];
				
			}
			if($layout=='Banner Section'){
				$BannerSections=$this->Homes->BannerSections->find()->where(['BannerSections.is_deleted'=>0]);
				$homeScreen[]=['title'=>$Home->title,'layout'=>$layout,'Section'=>$BannerSections];
				
			} 
			if($layout=='Product Section'){
				$ProductSections=$this->Homes->ProductSections->find()->where(['ProductSections.is_deleted'=>0])
				->contain(['Items'=>['ItemRows'=>['Colors','Sizes','ItemImages']]]);
				$homeScreen[]=['title'=>$Home->title,'layout'=>$layout,'Section'=>$ProductSections];
				
			}
			
		}
		
		
		
		
		$success = true;
		$message = 'Data Found';		


		$this->set(compact('success','message','homeScreen'));
		$this->set('_serialize',['success','message','homeScreen']);
		
		
	}
   
   
   
}