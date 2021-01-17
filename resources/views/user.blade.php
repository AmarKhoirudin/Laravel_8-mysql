@extends('Layout/main')

@section('title', 'Daftar User')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar User</h1>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)    
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->name}}</td>
                                <td>{{ $data->email}}</td>
                                <td>{{ $data->phone}}</td>
                                <td>
                                    <span class="badge bg-success">edit</span>
                                    <span class="badge bg-danger">delete</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection