@extends('Layout/main')

@section('title', 'Daftar User')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Student</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->name }}</h5>
                        <p class="card-text">{{ $student->email }}</p>
                        <p class="card-text">{{ $student->phone }}</p>
                        <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="{{ $student->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                      <a href="{{ url('/students') }}" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection