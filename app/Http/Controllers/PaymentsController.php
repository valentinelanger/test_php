<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentsController extends Controller
{
  public function index()
  {

    $payments = Payment::all();
    return view('payments.index', compact('payments'));
  }

  public function state($payment)
  {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => "https://homologation.lydia-app.com/api/request/state.json",
      CURLOPT_POSTFIELDS => array('request_id' => $payment->request_id
      )
    ));

    $res = curl_exec($curl);
    curl_close($curl);
    $result = json_decode($res);


    $status = $result->state;



    dd(json_decode($res));
  }
}
