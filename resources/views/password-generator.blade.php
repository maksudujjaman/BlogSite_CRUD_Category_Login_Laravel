@extends('master')

@section('title')
    Password Generator
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-white text-center fw-bolder fs-3">Password Generator Program</div>
                        <div class="card-body bg-light">
                            <form action="{{ route('make-password')  }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-4">Enter Your Password Length</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="password_length"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4">Your Password</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="{{session('password')}}"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="form-control btn btn-success text-white fw-bolder fs-5" value="Create New Password"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
