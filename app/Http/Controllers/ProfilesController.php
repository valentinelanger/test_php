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

    return redirect('/');
  }
}
