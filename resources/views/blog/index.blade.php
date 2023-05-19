@extends('master')

@section('title')
    Add Blog
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add Blog Form</div>
                        <div class="card-body">
                            <h4 class="text-info text-center">{{ session('message')  }}</h4>
                            <form action="{{route('blog.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="category_id" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <select name="category_id" id="category_id" class="form-control" required>
                                            <option value=" " disabled selected> -- Select Blog Category -- </option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"> {{$category->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"/>
                                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="description" cols="30" rows="5" class="form-control"> {{ old('description') }} </textarea>
                                        <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" id="image" name="image" accept="image/*" class="form-control"/>
                                        <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Create New Blog"/>
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
