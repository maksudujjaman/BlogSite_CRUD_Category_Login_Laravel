@extends('master')

@section('title')
    Edit Blog
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-info text-center text-white fw-bolder fs-3">Edit Blog Form</div>
                        <div class="card-body">
                            <form action="{{ route('blog.update', ['id' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="category_id" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <select name="category_id" id="category_id" class="form-control" required>
                                            <option value=" " disabled selected> -- Select Blog Category -- </option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$category->id == $blog->category_id ? 'selected' : ''}}> {{$category->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title" class="col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ $blog->title }}" class="form-control" id="title" name="title"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $blog->description }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" id="image" name="image" accept="image/*" class="form-control"/>
                                        <img src="{{ asset($blog->image) }}" alt="" height="100" width="120"/>
                                        <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-info" value="Update Blog Info"/>
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
