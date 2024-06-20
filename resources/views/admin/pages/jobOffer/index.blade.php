@extends('admin.layouts.app')
@section('title', 'JobOffers')

@section('contentHeader', 'JobOffers')

@section('contentHeaderLink')
    <a href="{{ route('admin.job-offers.index') }}">All</a>
@endsection

@section('contentHeaderActive', 'JobOffers')

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
                                <th>title</th>
                                <th>Description</th>
                                <th>link</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobOffers as $offer)
                                <tr>
                                    <th>{{ $jobOffers->firstItem() + $loop->index }}</th>
                                    <td>{{ $offer->name }}</td>
                                    <td>{{ $offer->title }}</td>
                                    <td>{{ Str::limit($offer->description, 30, '...') }}</td>
                                    <td>{{ $offer->link }}</td>
                                    <td>
                                        <a href="{{ route('admin.job-offers.edit', $offer->id) }}"
                                            class="btn btn-info">Update</a>
                                        <form action="{{ route('admin.job-offers.destroy', $offer->id) }}" method="post"
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
                {{ $jobOffers->links() }}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@push('script')
@endpush
