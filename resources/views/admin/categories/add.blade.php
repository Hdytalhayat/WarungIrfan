@extends('layouts.admin')

@section('title')
    Add Categories
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Categories</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('insert-categories') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name='name'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name='slug'>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" class="form-control" name='status'>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Popular</label>
                                <input type="checkbox" class="form-control" name='popular'>
                            </div>
                            <div class="col-md-12">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="image" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection