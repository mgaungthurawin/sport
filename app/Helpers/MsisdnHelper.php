<?php

namespace App\Helpers;
use App;
use App\Model\Customer;
use App\Model\Subscriber;

class MsisdnHelper 
{
	public function operatorValitation($msisdn) {
		$operator = operator($msisdn);
		switch ($operator) {
			case 'MPT':
				return $this->checkMsisdn($msisdn);
				break;
			
			default:
				return 'invalid';
				break;
		}
	}

	public function checkMsisdn($msisdn) {
		$msisdn = ltrim($msisdn, '+');
		$row = Customer::where('msisdn', $msisdn)->first();
		if(empty($row)) {
			$customer = new Customer;
			$customer->msisdn = $msisdn;
			$customer->save();
			$url = 'http://macnt.mpt.com.mm/API/CGRequest?CpId=TAP&MSISDN='.$msisdn.'&productID=10500&pName=Taptube&pPrice=99&pVal=1&CpPwd=tap@123&CpName=TAP&reqMode=WAP&reqType=SUBSCRIPTION&ismID=17&transID='. getUUID() .'&sRenewalPrice=99&sRenewalValidity=1&request_locale=my&serviceType=T_TAP_WAP_SUB_D&planId=T_TAP_WAP_SUB_D_99';
			// return $url;
		}
		$tranid = getUUID();
		$data = otpSend($msisdn, $tranid);
		return $data;

		// $subscriber = Subscriber::where('customer_id', $row->id)->first();
		// if($subscriber) {
		// 	if(TRUE == $subscriber->is_active && TRUE == $subscriber->is_subscribed) {
		// 		$tranid = getUUID();
		// 		$data = otpSend($msisdn, $tranid);
		// 	}
		// }

		// $url = 'http://macnt.mpt.com.mm/API/CGRequest?CpId=TAP&MSISDN='.$msisdn.'&productID=10500&pName=Taptube&pPrice=99&pVal=1&CpPwd=tap@123&CpName=TAP&reqMode=WAP&reqType=SUBSCRIPTION&ismID=17&transID='. getUUID() .'&sRenewalPrice=99&sRenewalValidity=1&request_locale=my&serviceType=T_TAP_WAP_SUB_D&planId=T_TAP_WAP_SUB_D_99';
		// return $url;

	}

}




