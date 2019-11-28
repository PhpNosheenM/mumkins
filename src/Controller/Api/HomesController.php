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
			if($layout=='Newsletter Section'){
				$NewsletterSections=$this->Homes->NewsletterSections->find()->where(['NewsletterSections.is_deleted'=>0]);
				$homeScreen[]=['title'=>$Home->title,'layout'=>$layout,'Section'=>$NewsletterSections];
				
			} 
		}
		
		$FooterSections=$this->Homes->FooterSections->find()->where(['FooterSections.is_deleted'=>0,'show_on'=>'Home Page']);
		
		
		$success = true;
		$message = 'Data Found';		


		$this->set(compact('success','message','homeScreen','FooterSections'));
		$this->set('_serialize',['success','message','homeScreen','FooterSections']);
		
		
	}
	
	public function newsletteradd(){
	   
		$home = $this->Homes->Newsletters->newEntity();
		if($this->request->is('post')){
			//pr($this->request->data); exit;
			 $isemail=$this->Homes->Newsletters->exists(['Newsletters.email'=>$this->request->data['email']]);
			if($isemail==1){
				$success = 'false'; 
				  
				$message = 'You have already subscribed.';	
			}else{
				$home = $this->Homes->Newsletters->patchEntity($home, $this->request->getData());
				if($this->Homes->Newsletters->save($home)){
				   $success = 'true';
				   $message = 'You have subscribed successfully.';		
				   
				}else{
					$success = 'false';
					$message = 'The data could not be saved. Please, try again.';	
				}
			}	
		}

		$this->set(compact('success','message'));
		$this->set('_serialize',['success','message']);
	   
	}
   
   
   
}
