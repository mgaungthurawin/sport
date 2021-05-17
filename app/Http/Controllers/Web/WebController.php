<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\MsisdnHelper;

class WebController extends Controller
{
    public function msisdn() {
    	return view('web.msisdn');
    }

    public function postMsisdn(Request $request) {
    	$data = $request->all();
    	$msisdn = $data['country_code'].'9'.$data['phone_number'];
    	$msisdnhelper = new MsisdnHelper;
    	$url = $msisdnhelper->operatorValitation($msisdn);
    	return $url;
    	// return redirect(url($url));
    }

    public function optSend() {

    }
}
