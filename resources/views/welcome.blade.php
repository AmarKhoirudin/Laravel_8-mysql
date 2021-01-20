@extends('Layout.main')
@section('title', "Home")
@section('body')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Hello, Amar!</h1>
        @if (session('alertMessage'))    
          <div class="alert alert-success" role="alert">
            {{ session('alertMessage') }}
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection