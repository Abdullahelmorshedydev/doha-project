@extends('admin.layouts.app')
@section('title', 'Siminars')

@section('contentHeader', 'Siminars')

@section('contentHeaderLink')
    <a href="{{ route('admin.siminars.index') }}">All</a>
@endsection

@section('contentHeaderActive', 'Siminars')

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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siminars as $siminar)
                                <tr>
                                    <th>{{ $siminars->firstItem() + $loop->index }}</th>
                                    <td>{{ $siminar->name }}</td>
                                    <td>{{ Str::limit($siminar->description, 30, '...') }}</td>
                                    <td>{{ $siminar->date }}</td>
                                    <td>
                                        <a href="{{ route('admin.siminars.edit', $siminar->id) }}"
                                            class="btn btn-info">Update</a>
                                        <form action="{{ route('admin.siminars.destroy', $siminar->id) }}" method="post"
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
                {{ $siminars->links() }}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@push('script')
@endpush
