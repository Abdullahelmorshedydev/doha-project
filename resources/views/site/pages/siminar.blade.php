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
        <div class="events">
            <ul>
                <li>
                    <div class="time">
                        <h2>
                            18 <br> <span>July</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                            Digital Transformation and the Labor Market
                        </h3>
                        <p>In cooperation with Next Academy, we invite college students to attend the introductory,at one
                            o’clock in the afternoon, in hall 1.The symposium aims to: Introducing the needs of the labor
                            market in the field of information technology, Pathways and specializations required in the
                            labor market. </p>
                        <a href="">Book now</a>
                    </div>
                    <div style="clear :both"></div>
                </li>
                <li>
                    <div class="time">
                        <h2>
                            25 <br> <span>March</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                            Financial Education and Inclusion
                        </h3>
                        <p>In cooperation with the Bank of Egypt for the program’s students, these seminars are held to
                            spread financial education and improve students’ ability to manage money, understand and use
                            various financial services to contribute to achieving financial inclusion, as financial
                            inclusion is concerned with providing financial services using easy and simple methods and at
                            the lowest costs.
                            at Ten in the morning in Dr. Enas El Nabawy’s hall.</p>
                        <a href="">Book now</a>
                    </div>
                    <div style="clear :both"></div>
                </li>
                <li>
                    <div class="time">
                        <h2>
                            4<br> <span>September</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                            Emirates NBD Seminar
                        </h3>
                        <p>The program administration has agreed with many to hold many seminars that will benefit all
                            students, related to the labor market, how to prepare yourself for the labor market, what are
                            the requirements for the labor market, and so on, which will prove to you how much a BIS
                            graduate is in high demand in the labor market, but knows how to work on himself?
                            It'll be at One o'clock in the afternoon with Emirates NBD Bank ,In hall 2.</p>
                        <a href="">Book now</a>
                    </div>
                    <div style="clear :both"></div>
                </li>
            </ul>
        </div>
    </section>
@endsection
@push('script')
@endpush
