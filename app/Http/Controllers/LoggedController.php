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

  public function create() {

    return view('phone-create');
  }

  public function store(Request $request) {

    $data = $request -> all();
    $phone = Smartphone::create($data);

    return redirect() -> route('phone.show', $phone -> id);
  }

  public function destroy($id) {

    $phone = Smartphone::findOrFail($id);
    $phone -> delete();

    return redirect() -> route('phone.index');
  }

  public function edit($id) {

    $phone = Smartphone::findOrFail($id);

    return view('phone-edit',compact('phone'));
  }

  public function update(Request $request, $id) {

    $data = $request -> all();
    $phone = Smartphone::findOrFail($id);

    $phone -> update($data);

    return redirect() -> route('phone.show', $id);
  }


}
