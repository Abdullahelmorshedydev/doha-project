@extends('site.layouts.app')
@section('title', 'Job Offers - The Event Catcher')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/cs/job offers.css') }}">
@endpush
@section('content')
    @include('site.includes.navbar')
    <section>
        <div class="leftbox">
            <div class="content">
                <h1>
                    Opportunity Knocks
                </h1>
                <p> BIS students when they join any team ,They make a difference so join a team that values your skills and
                    talents.Dive into a world of opportunities with us!</p>
            </div>
        </div>
        @if (count($jobOffers) > 0)
            <div class="events">
                <ul>
                    @foreach ($jobOffers as $offer)
                        <li>
                            <div class="time">
                                <h2>
                                    {{ $offer->name }} <br> <span></span>
                                </h2>
                            </div>
                            <div class="details">
                                <h3>
                                    {{ $offer->title }}
                                </h3>
                                <p>
                                    {{ $offer->description }}
                                </p>
                                <a href="{{ $offer->link }}" target="_blank">{{ $offer->link }}</a>
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
