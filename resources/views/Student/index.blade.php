@extends('Layout/main')

@section('title', 'Daftar User')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Student</h1>
                <a href="{{ url('/students/create') }}" class="btn btn-primary my-3">Add Data Student</a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <ul class="list-group">
                    @foreach ($students as $student)    
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $student->name }}
                            <a href="/students/{{ $student->id }}" class="btn btn-primary">Detail</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection