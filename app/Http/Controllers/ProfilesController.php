<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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

    $client = new Client(['base_uri' => 'https://homologation.lydia-app.com/']);
    $response = $client->post('api/request/do.json', [
      'form_params' => [
        'vendor_token' => '58385365be57f651843810',
        'user_token' => '58385365be57f651843810',
        'recipient' => '$profile.email',
        'amount' => '10',
        'currency' => 'EUR',
        'type' => 'email'
      ]
    ]);
    var_dump($response);



  }
}
