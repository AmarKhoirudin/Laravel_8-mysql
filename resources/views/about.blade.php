@extends('Layout/main')
@section('title', "About")
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Hello, {{ $name }}!</h1>
                <p>This is your about</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, provident. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia esse eum voluptate cupiditate. Et at, nostrum perferendis aut ducimus pariatur?</p>
                <form action="/about-submit">
                    <button type="submit" class="btn btn-success">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection