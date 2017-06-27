<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
  public function index()
  {
    return view('profiles.index');
  }

  public function create()
  {
    return view('profiles.create');
  }

  public function store()
  {

    $profile = new \App\Profile;
    $profile->firstname = request('firstname');
    $profile->lastname = request('lastname');
    $profile->email = request('email');
    $profile->status = false;

    $profile->save();

    echo $profile->email;

    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => "https://homologation.lydia-app.com/api/request/do.json",
      CURLOPT_POSTFIELDS => array('vendor_token' => '58385365be57f651843810',
          'recipient' => $profile->email,
          'amount' => '10',
          'currency' => 'EUR',
          'type' => 'email'
      )
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    dd($response);
  }

}
