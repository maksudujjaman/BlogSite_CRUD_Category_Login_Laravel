@extends('master')


@section('title')
    Home Page
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset($blog->image)}}" alt="" class="" height="250"/>
                            <div class="card-body">
                                <a href="{{route('detail', ['id' => $blog['id']])}}" class="text-decoration-none text-black"> <h4>{{ $blog->title }}</h4> </a>

                                <p>{{ substr($blog->description,0, 100)}}</p>
                                <hr/>
                                <a href="{{route('detail', ['id' => $blog['id']])}}" class="btn btn-success" style>Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
