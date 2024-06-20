@extends('site.layouts.app')
@section('title', 'Home - The Event Catcher')
@push('style')
@endpush
@section('content')
    <div class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="{{ asset('assets/images/coloured.mp4') }}" type="video/mp4">
        </video>
        @include('site.includes.navbar')
        <div class="content">
            <h2>The Events Catcher</h2>
            <a href="{{ route('login.index') }}">Sign In</a>
        </div>
        <div class="clr"></div>
    </div>
    <div class="ourstory">
        <div class="story-img">
            <img src="{{ asset('assets/images/photo_2024-05-11_19-21-47.jpg') }}" alt="chef">
        </div>
        <div class="story-info">
            <h2> Our story</h2>
            <p> why we choose this idea? <br> because we as students didn’t know the events happening around us as we
                need to improve our skills and know more about

                Some people specially students facing problem about knowing the events around them and if they knew
                about it they can’t approach it easily </p>

        </div>
        <div class="clr">
        </div>
    </div>
@endsection
@push('script')
@endpush
