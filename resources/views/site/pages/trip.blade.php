@extends('site.layouts.app')
@section('title', 'trip - The Event Catcher')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/cs/trips.css') }}">
@endpush
@section('content')
    @include('site.includes.navbar')
    <section>
        <div class="leftbox">
            <div class="content">
                <h1>
                    Creating memories, one trip at a time.
                </h1>
                <p>We help you capture life-lasting memories!<br>
                    Book your trip now!
                    𝕐𝕆𝕌'ℝ𝔼 ℕ𝕆𝕋 𝕀𝕄𝕄𝕆ℝ𝕋𝔸𝕃, 𝕊𝔼𝕀ℤ𝔼 𝔼𝕍𝔼ℝ𝕐 𝕄𝕆𝕄𝔼ℕ𝕋.</p>
            </div>
        </div>
        @if (count($trips) > 0)
            <div class="events">
                <ul>
                    @foreach ($trips as $trip)
                        <li>
                            <div class="time">
                                <h4>
                                    {{ $trip->date }}
                                </h4>
                            </div>
                            <div class="details">
                                <h3>
                                    {{ $trip->name . ' ' . $trip->event->name }}
                                </h3>
                                <p>{{ $trip->description }}</p>
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
