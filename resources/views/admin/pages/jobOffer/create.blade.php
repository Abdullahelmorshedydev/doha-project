@extends('admin.layouts.app')
@section('title', 'Create New Job Offer')

@section('contentHeader', 'Create New Job Offer')

@section('contentHeaderLink')
    <a href="{{ route('admin.job-offers.index') }}">All</a>
@endsection

@section('contentHeaderActive', 'Create New Job Offer')

@push('style')
@endpush

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- form start -->
                <form action="{{ route('admin.job-offers.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                id="exampleInputEmail1" placeholder="Enter name">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                id="title" placeholder="Enter title">
                        </div>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" name="description" value="{{ old('description') }}" class="form-control"
                                id="exampleInputEmail1" placeholder="Enter description">
                        </div>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" value="{{ old('link') }}" class="form-control"
                                id="link" placeholder="Enter link">
                        </div>
                        @error('link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
    </div>
@endsection

@push('script')
@endpush
