@extends('admin.layouts.app')
@section('title', 'Edit Trip')

@section('contentHeader', 'Edit Trip')

@section('contentHeaderLink')
    <a href="{{ route('admin.trips.index') }}">All</a>
@endsection

@section('contentHeaderActive', 'Edit Trip')

@push('style')
@endpush

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- form start -->
                <form action="{{ route('admin.trips.update', $trip->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" value="{{ old('name', $trip->name) }}" class="form-control"
                                id="exampleInputEmail1" placeholder="Enter name">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" value="{{ old('date', $trip->date) }}" class="form-control"
                                id="date" placeholder="Enter date">
                        </div>
                        @error('date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" name="description" value="{{ old('description', $trip->description) }}"
                                class="form-control" id="exampleInputEmail1" placeholder="Enter description">
                        </div>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="event_id">Event</label>
                            <select name="event_id" class="form-control" id="event_id">
                                <option value="">Choose Event</option>
                                @foreach ($events as $event)
                                    <option value="{{ $event->id }}"
                                        {{ old('event_id', $trip->event_id) == $event->id ? 'selected' : '' }}>
                                        {{ $event->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('event_id')
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
