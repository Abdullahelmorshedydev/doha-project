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
            $("#calendar").evoCalendar({
                theme: "Royal Navy",
                eventDisplayDefault: true,
                sidebarDisplayDefault: true,
                onMonthChange: function() {
                    fetchEvents();
                }
            });

            fetchEvents();

            function fetchEvents() {
                $.ajax({
                    url: '/api/calender',
                    method: 'GET',
                    success: function(response) {
                        if (Array.isArray(response)) {
                            $("#calendar").evoCalendar('removeCalendarEvent', '*');
                            response.forEach((event) => {
                                $("#calendar").evoCalendar('addCalendarEvent', {
                                    id: event.id,
                                    name: event.name,
                                    date: event.date,
                                    description: event.description,
                                    type: event.type
                                });
                            });
                        } else {
                            console.error('Error: Response is not an array', response);
                        }
                    },
                    error: function(error) {
                        console.error('Error fetching events:', error);
                    }
                });
            }
        });
    </script>
@endpush
