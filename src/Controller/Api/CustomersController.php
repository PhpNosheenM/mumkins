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

    public function registrationsendotp(){
		
		$mobile_no=$this->request->query('mobile_no');
		if(!empty($mobile_no)){
			//echo $mobile_no;exit;
			 $customerDetails = $this->Customers->find()->where(['mobile'=>$mobile_no])->first();
			if($customerDetails){
				$status=false;
				$error='Mobile number is already registered please login.';
				$otp='';
			}else{
					// $random=(string)mt_rand(1000,9999);
					// $sms=str_replace(' ', '+', 'Your one time OTP is: '.$random.' ovRpCuXDUvO');
					// $working_key='A7a76ea72525fc05bbe9963267b48dd96';
					// $sms_sender='HEALTH';
					// $sms=str_replace(' ', '+', $sms); 
					// file_get_contents('http://103.39.134.40/api/mt/SendSMS?user=phppoetsit&password=9829041695&senderid='.$sms_sender.'&channel=Trans&DCS=0&flashsms=0&number='.$mobile_no.'&text='.$sms.'&route=7'); 
				$status=true;
				$error='Otp sent successfully.';
				$otp='123';//$random;
			}
		}else{
			$status=false;
			$error='Empty mobile number';
			$otp='';
		}
		//echo $mobile_no;exit;
		$this->set(compact('status', 'error', 'otp'));
	    $this->set('_serialize', ['status', 'error', 'otp']);
	}
	public function registrationnew()
		{
			if ($this->request->is(['post'])) {
				$customerDetails = $this->Customers->newEntity();
				$customerDetails= $this->Customers->patchEntity($customerDetails, $this->request->getData());
				if($this->Customers->save($customerDetails)) {
					$status=true;
					$customerDetails=$this->Customers->get($customerDetails->id);
					// $customerDetails->referral_code='HM'.$customerDetails->id;
					// $customerDetails=$this->Customers->save($customerDetails);
					$customerDetails=$this->Customers->get($customerDetails->id);
					$error='Customer registration successfully.';
				}else{ 
					$status=false;
					$error='Customer registration unsuccessfully.';
				}
			}
			$this->set(compact('status', 'error', 'customerDetails'));
	        $this->set('_serialize', ['status', 'error', 'customerDetails']);
			
		}
}
