@extends('Layout/main')

@section('title', 'Form Add Student')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Add Student</h1>
                <form method="POST" action="/students">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Add your name" name="name" value="{{ old('name') }}">
                      @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Add your email" name="email" value="{{ old('email') }}">
                      @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Add your phone" name="phone" value="{{ old('phone') }}">
                      @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Data!</button>
                </form>
            </div>
        </div>
    </div>
@endsection