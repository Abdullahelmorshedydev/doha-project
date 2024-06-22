@extends('site.layouts.app')
@section('title', 'Siminar - The Event Catcher')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/cs/checkout.css') }}">
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
                <p>siminars play a crucial role in enhancing students’ educational experiences by providing opportunities
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
                                @auth
                                    <button type="button" onclick="openModal()">Book Now</button>
                                @endauth
                            </div>
                            <div style="clear :both"></div>
                        </li>
                        <div class="checkout-container d-none">
                            <div class="right-side">
                                <div class="receipt">
                                    <h2 class="receipt-heading">Receipt Summary ( {{ $siminar->name }} )</h2>
                                </div>

                                <div class="payment-info">
                                    <h3 class="payment-heading">Payment Information</h3>
                                    @auth
                                        <form class="form-box" action="{{ route('calender.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="name" id="modalName" value="{{ $siminar->name }}">
                                            <input type="hidden" name="description" id="modalDescription"
                                                value="{{ $siminar->description }}">
                                            <input type="hidden" name="date" id="modalDate" value="{{ $siminar->date }}">
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <input type="hidden" name="type" value="2">
                                            <div>
                                                <label for="full-name">Full Name</label>
                                                <input id="full-name" name="full-name" placeholder="Satoshi Nakamoto" required
                                                    type="text" />
                                            </div>

                                            <div>
                                                <label for="credit-card-num">Card Number
                                                    <span class="card-logos">
                                                        <i class="card-logo fa-brands fa-cc-visa"></i>
                                                        <i class="card-logo fa-brands fa-cc-amex"></i>
                                                        <i class="card-logo fa-brands fa-cc-mastercard"></i>
                                                        <i class="card-logo fa-brands fa-cc-discover"></i> </span></label>
                                                <input id="credit-card-num" name="credit-card-num"
                                                    placeholder="1111-2222-3333-4444" required type="text" />
                                            </div>

                                            <div>
                                                <p class="expires">Expires on:</p>
                                                <div class="card-experation">
                                                    <label for="expiration-month">Month</label>
                                                    <select id="expiration-month" name="expiration-month" required>
                                                        <option value="">Month:</option>
                                                        <option value="">January</option>
                                                        <option value="">February</option>
                                                        <option value="">March</option>
                                                        <option value="">April</option>
                                                        <option value="">May</option>
                                                        <option value="">June</option>
                                                        <option value="">July</option>
                                                        <option value="">August</option>
                                                        <option value="">September</option>
                                                        <option value="">October</option>
                                                        <option value="">November</option>
                                                        <option value="">Decemeber</option>
                                                    </select>

                                                    <label class="expiration-year">Year</label>
                                                    <select id="experation-year" name="experation-year" required>
                                                        <option value="">Year</option>
                                                        <option value="">2023</option>
                                                        <option value="">2024</option>
                                                        <option value="">2025</option>
                                                        <option value="">2026</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="cvv">CVV</label>
                                                <input id="cvv" name="cvv" placeholder="415" type="text"
                                                    required />
                                                <a class="cvv-info" href="#">What is CVV?</a>
                                            </div>

                                            <button class="btn" type="submit">
                                                <i class="fa-solid fa-lock"></i> Book Securely
                                            </button>
                                            <button class="btn" type="submit" id="closeModal">
                                                <i class="fa-solid fa-lock"></i> Close
                                            </button>
                                        </form>
                                    @endauth

                                    <p class="footer-text">
                                        <i class="fa-solid fa-lock"></i>
                                        Your credit card infomration is encrypted
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>

    <script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>

@endsection
@push('script')
    <script>
        let modal = document.querySelector(".checkout-container");

        function openModal() {
            if (modal.classList.contains('d-none')) {
                modal.classList.remove('d-none');
            }
        }

        document.querySelector('#closeModal').addEventListener('click', function() {
            if (!modal.classList.contains('d-none')) {
                modal.classList.add('d-none');
            }
        });
    </script>
@endpush
