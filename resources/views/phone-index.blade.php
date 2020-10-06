@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Smartphone
                </div>

                <div class="card-body">
                  @auth
                    <div style="text-align: center;">
                      <a class="btn btn-secondary" href="{{ route('phone.create')}}">
                        CREATE NEW SMARTPHONE
                      </a>
                    </div>  
                  @endauth
                  <ul style="margin-top: 30px;">
                    @foreach ($phones as $phone)
                      <li>
                        <a href="{{ route('phone.show', $phone -> id)}}">
                          MODELLO : {{ $phone -> name }}
                        </a>
                      </li>
                      <hr>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
