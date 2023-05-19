@extends('master')

@section('title')
    Add Category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success text-center text-white fw-bolder fs-3">Add Category Form</div>
                        <div class="card-body">
                            <h4 class="text-info text-center">{{ session('message')  }}</h4>
                            <form action="{{route('category.create')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-md-3">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"/>
                                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" class="col-md-3">Category Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="description" cols="30" rows="5" class="form-control"> {{ old('description') }} </textarea>
                                        <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-md-3">Category Image</label>
                                    <div class="col-md-9">
                                        <input type="file" id="image" name="image" accept="image/*" class="form-control"/>
                                        <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn btn-success" value="Create New Category"/>
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
