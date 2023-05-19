@extends('master')

@section('title')
    Dashboard
@endsection


@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-success fw-bolder fs-1">Successful Login</h1>
                    <p class="py-4 text-center text-black fw-bolder fs-2">Welcome <span class="text-danger">{{session('user_name')}}</span></p>
                </div>
            </div>
        </div>
    </section>

@endsection
