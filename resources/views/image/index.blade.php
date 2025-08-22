@extends('layouts.app')

@section('title', 'Image Storage - DI')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm rounded-3">
                <div class="card-header">
                    Upload image
                </div>

                <div class="card-body">
                    <form action="{{ route('image.save') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="profile_image">Image:</label>
                            <input type="file" name="profile_image" id="profile_image" class="form-control" />
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </form>

                    <hr>

                    <h5 class="mt-3">Preview:</h5>
                    <img src="{{ asset('storage/test.png') }}"
                         alt="Uploaded Image"
                         class="img-fluid mt-2 rounded shadow-sm" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
