@extends('admin.layouts.app')
@section('title', 'Trips')

@section('contentHeader', 'Trips')

@section('contentHeaderLink')
    <a href="{{ route('admin.trips.index') }}">All</a>
@endsection

@section('contentHeaderActive', 'Trips')

@push('style')
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Event</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trips as $trip)
                                <tr>
                                    <th>{{ $trips->firstItem() + $loop->index }}</th>
                                    <td>{{ $trip->name }}</td>
                                    <td>{{ Str::limit($trip->description, 30, '...') }}</td>
                                    <td>{{ $trip->date }}</td>
                                    <td>{{ $trip->event->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.trips.edit', $trip->id) }}"
                                            class="btn btn-info">Update</a>
                                        <form action="{{ route('admin.trips.destroy', $trip->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $trips->links() }}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@push('script')
@endpush
