@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  EDIT : {{ $phone -> name }}
                </div>

                <div class="card-body">
                  <form action="{{ route('phone.update', $phone -> id) }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                      <label for="name">MODELLO</label> <br>
                      <input type="text" name="name" value="{{ $phone -> name }}">
                    </div>
                    <div class="form-group">
                      <label for="description">DESCRIZIONE</label> <br>
                      <input type="text" name="description" value="{{ $phone -> description }}">
                    </div>
                    <div class="form-group">
                      <label for="price">PREZZO</label> <br>
                      <input type="number" name="price" value="{{ $phone -> price }}">
                    </div>
                    <button class="btn btn-primary"type="submit">SAVE</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
