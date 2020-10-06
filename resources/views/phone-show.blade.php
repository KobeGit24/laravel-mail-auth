@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  MODELLO : {{ $phone -> name }}
                </div>

                <div class="card-body">
                  <div>
                  DESCRIPTION : {{ $phone -> description }} <br>
                  PRICE : {{ $phone -> price }}
                  </div>
                  <br>
                  <div>
                    @auth
                      <a class="btn btn-primary"href="{{ route('phone.edit' $phone -> id)}}">EDIT</a>
                      <a class="btn btn-danger"href="{{ route('phone.delete', $phone -> id)}}">DELETE</a>
                    @else
                      <p style="color:red;">
                        please LOGIN if you want <em><strong>EDIT</strong></em> or <em><strong>DELETE</strong></em> phone.
                      </p>
                    @endauth
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
