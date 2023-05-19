@extends('master')


@section('title')
    About Page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white fw-bolder fs-3">Full Name Program</div>
                        <div class="card-body">
                            <form action="{{ route('make-full-name')  }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="first-name" class="col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="first-name" name="first_name" placeholder="Enter First Name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="last-name" class="col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Enter Last Name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="full-name" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ session('message')  }}" class="form-control" id="full-name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-dark fw-bolder" value="Get Full Name"/>
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
