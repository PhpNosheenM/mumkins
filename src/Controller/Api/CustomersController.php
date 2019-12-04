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
class CustomersController extends AppController
{
    public function userlist()
    {
		$customer = $this->Customers->find();
		//pr($customer->toArray());exit;
		$status = true;
		$message = 'Success';
		
		$this->set(compact('success','message','customer'));
		$this->set('_serialize',['success','message','customer']);		 
    } 

    public function sendotp(){
		
		$mobile_no=$this->request->query('mobile_no');
		if(!empty($mobile_no)){

			$customerDetails = $this->Customers->find()->where(['mobile'=>$mobile_no])->first();
			if($customerDetails){
				$availiable="Yes";
			}
			else
			{
				$availiable="No";
			}
			$random=(string)mt_rand(1000,9999);
					
				$status=true;
				$error='Otp sent successfully.';
				$otp=$random;
		
		}else{
			$status=false;
			$error='Empty mobile number';
			$otp='';
		}
		//echo $otp;exit;
		$this->set(compact('status', 'error', 'otp','availiable'));
	    $this->set('_serialize', ['status', 'error', 'otp','availiable']);
	}
	public function newregister()
		{
			$customers = $this->Customers->newEntity();
			if ($this->request->is(['post'])) {
				$mobile=$this->request->getData('mobile');
				$customerDetail=$this->Customers->exists(['Customers.mobile'=>$mobile]);
				if($customerDetail==1){
					$customers=$this->Customers->find()->where(['Customers.mobile'=>$mobile])->toArray();
					$customerDetails=$this->Customers->get($customers['0']->id);
					$status=true; 
					$error='Customers';
					
				}else{
					$customers= $this->Customers->patchEntity($customers, $this->request->getData());
					//pr($customers);exit;
					if($this->Customers->save($customers)) {
						$status=true;
						$customerDetails=$this->Customers->get($customers->id);
						$error='Customer registration successfully.';
					}else{ 
						$status=false;
						$error='Customer registration unsuccessfully.';
					}
				}
			}
			$this->set(compact('status', 'error', 'customerDetails'));
	        $this->set('_serialize', ['status', 'error', 'customerDetails']);
			
		}
}
