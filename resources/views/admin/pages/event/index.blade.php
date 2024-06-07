@extends('admin.layouts.app')
@section('title', 'Events')

@section('contentHeader', 'Events')

@section('contentHeaderLink')
    <a href="{{ route('admin.events.index') }}">All</a>
@endsection

@section('contentHeaderActive', 'Events')

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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <th>{{ $events->firstItem() + $loop->index }}</th>
                                    <td>
                                        <img src="{{ asset($event->image ? 'storage/' . $event->image->image : 'admin/images/morshedy.jpg') }}"
                                            width="50px" alt="">
                                    </td>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ Str::limit($event->description, 30, '...') }}</td>
                                    <td>{{ $event->price }}</td>
                                    <td>
                                        <a href="{{ route('admin.events.edit', $event->id) }}"
                                            class="btn btn-info">Update</a>
                                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="post"
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
                {{ $events->links() }}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@push('script')
@endpush
