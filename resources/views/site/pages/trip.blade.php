@extends('site.layouts.app')
@section('title', 'trip - The Event Catcher')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/cs/checkout.css') }}">
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
                            @auth
                                <button type="button" onclick="openModal()">Book Now</button>
                            @endauth
                        </div>
                        <div style="clear :both"></div>
                    </li>
                    <div class="checkout-container d-none">
                        <div class="right-side">
                            <div class="receipt">
                                <h2 class="receipt-heading">Receipt Summary ( {{ $trip->name }} )</h2>
                            </div>

                            <div class="payment-info">
                                <h3 class="payment-heading">Payment Information</h3>
                                <form class="form-box" action="{{ route('calender.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="name" id="modalName" value="{{ $trip->name }}">
                                    <input type="hidden" name="description" id="modalDescription"
                                        value="{{ $trip->description }}">
                                    <input type="hidden" name="date" id="modalDate" value="{{ $trip->date }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="type" value="3">
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
                                        <input id="credit-card-num" name="credit-card-num" placeholder="1111-2222-3333-4444"
                                            required type="text" />
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
                                        <input id="cvv" name="cvv" placeholder="415" type="text" required />
                                        <a class="cvv-info" href="#">What is CVV?</a>
                                    </div>

                                    <button class="btn" type="submit">
                                        <i class="fa-solid fa-lock"></i> Book Securely
                                    </button>
                                    <button class="btn" type="submit" id="closeModal">
                                        <i class="fa-solid fa-lock"></i> Close
                                    </button>
                                </form>

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

        document.querySelector('#closeModal').addEventListener('click', function () {
            if (!modal.classList.contains('d-none')) {
                modal.classList.add('d-none');
            }
        });
    </script>
@endpush