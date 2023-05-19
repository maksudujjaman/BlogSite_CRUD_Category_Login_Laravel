@extends('master')

@section('title')
    Edit Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-info text-center text-white fw-bolder fs-3">Edit Category Form</div>
                        <div class="card-body">
                            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{ $category->name }}" class="form-control" id="name" name="name"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $category->description }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Blog Image</label>
                                    <div class="col-md-9">
                                        <input type="file" id="image" name="image" accept="image/*" class="form-control"/>
                                        <img src="{{ asset($category->image) }}" alt="" height="100" width="120"/>
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
