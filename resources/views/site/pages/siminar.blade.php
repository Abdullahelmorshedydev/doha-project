@extends('site.layouts.app')
@section('title', 'Siminar - The Event Catcher')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/cs/events.css') }}">
@endpush
@section('content')
    @include('site.includes.navbar')
    <section>
        <div class="leftbox">
            <div class="content">
                <h1>
                    KNOWLEDGE SPHERE
                </h1>
                <p>Seminars play a crucial role in enhancing students’ educational experiences by providing opportunities
                    for deeper learning, skill development, networking, and exposure to new ideas and industry trends. They
                    prepare students not only for academic success but also for professional excellence and personal growth.
                </p>
            </div>
        </div>
        @if (count($siminars) > 0)
            <div class="events">
                <ul>
                    @foreach ($siminars as $siminar)
                        <li>
                            <div class="time">
                                <h4>
                                    {{ $siminar->date }}
                                </h4>
                            </div>
                            <div class="details">
                                <h3>
                                    {{ $siminar->name }}
                                </h3>
                                <p>{{ $siminar->description }}</p>
                                <a href="">Book now</a>
                            </div>
                            <div style="clear :both"></div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>
@endsection
@push('script')
@endpush
