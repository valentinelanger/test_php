<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentsController extends Controller
{
  public function index()
  {
    $payments = Payment::all();

    foreach ($payments as $payment) {
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


      switch($status) {
        case "0":
          $status = "Waiting";
          break;
        case "1":
          $status = "accepted";
        case "5":
          $status = "Refused by the payer";
        case "6":
          $status = "Cancelled";
        case "-1":
          $status = "Invalid payment";
      }

      $payment->status = $status;
      $payment->save();
    }

    return view('payments.index', compact('payments'));
  }

}
