@extends('site.layouts.app')
@section('title', 'Job Offers - The Event Catcher')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/cs/evo-calendar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/cs/evo-calendar.midnight-blue.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/cs/calendo.css') }}" />
@endpush
@section('content')
    <div class="calendo">
        <div id="calendar"></div>
    </div>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="{{ asset('assets/js/evo-calendar.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/calender',
                method: 'GET',
                success: function(response) {
                    $("#calendar").evoCalendar({
                        theme: "Royal Navy",
                        calendarEvents: response
                    });
                },
                error: function(error) {
                    console.error('Error fetching events:', error);
                }
            });
        });
    </script>
@endpush
