<?php

namespace App\Http\Controllers;
use App\Smartphone;

use Illuminate\Http\Request;

class LoggedController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function destroy($id) {

    $phone = Smartphone::findOrFail($id);
    $phone -> delete();

    return redirect() -> route('phone.index');
  }

}
