@extends('site.layouts.app')
@section('title', 'AboutUs - The Event Catcher')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/cs/about.css') }}">
@endpush
@section('content')
    @include('site.includes.navbar')
    <div class="container">
        <div class="title">
            <h1 class="fw-bolder">The magic devs <br> you've been searching for</h1>
        </div>
        <div class="content">
            <div class="card" id="one">
                <div class="img-box">
                    <img src="{{ asset('assets/images/mariam sabry.jpg') }}" alt="">
                    <div class="img-info">
                        <span>Front-end developer</span>
                        <p>undergradutated of faculty of business information system-Helwan uni.</p>
                        <div class="social-media">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <h3>Mariam sabry</h3>
            </div>
            <div class="card" id="two">
                <div class="img-box">
                    <img src="{{ asset('assets/images/merna.jpg') }}" alt="">
                    <div class="img-info">
                        <span>Front-end developer</span>
                        <p>undergradutated of faculty of business information system-Helwan uni.</p>
                        <div class="social-media">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <h3>Merna tamer </h3>
            </div>
            <div class="card" id="three">
                <div class="img-box">
                    <img src="{{ asset('assets/images/mariam sherif2.jpg') }}" alt="">
                    <div class="img-info">
                        <span>system analyst </span>
                        <p>undergradutated of faculty of business information system-Helwan uni.</p>
                        <div class="social-media">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <h3>Mariam Sherif </h3>
            </div>
            <div class="card" id="three">
                <div class="img-box">
                    <img src="{{ asset('assets/images/mariam ezz.jpg') }}" alt="">
                    <div class="img-info">
                        <span>Back-end developer</span>
                        <p>undergradutated of faculty of business information system-Helwan uni.</p>
                        <div class="social-media">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <h3>Mariam Ezz </h3>
            </div>
            <div class="card" id="three">
                <div class="img-box">
                    <img src="{{ asset('assets/images/do7aa.jpg') }}" alt="">
                    <div class="img-info">
                        <span>back-end developer</span>
                        <p>undergradutated of faculty of business information system-Helwan uni.</p>
                        <div class="social-media">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <h3>Mohamed Mamdouh </h3>
            </div>
            <div class="card" id="three">
                <div class="img-box">
                    <img src="{{ asset('assets/images/mariam nabil.jpg') }}" alt="">
                    <div class="img-info">
                        <span>business analyst</span>
                        <p>undergradutated of faculty of business information system-Helwan uni.</p>
                        <div class="social-media">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <h3>Mariam Nabil </h3>
            </div>
        </div>
    </div>
    <div class="circle2"></div>
@endsection
@push('script')
@endpush
