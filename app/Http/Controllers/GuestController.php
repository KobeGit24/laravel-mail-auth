<?php

namespace App\Http\Controllers;
use App\Smartphone;

use Illuminate\Http\Request;

class GuestController extends Controller {

  public function index() {

    $phones = Smartphone::all();

    return view('phone-index',compact('phones'));
  }

  public function show($id) {

    $phone = Smartphone::findOrFail($id);

    return view('phone-show',compact('phone'));
  }
}
