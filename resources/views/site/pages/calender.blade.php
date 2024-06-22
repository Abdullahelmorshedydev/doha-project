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
        let calendar = document.querySelector('.v-calendar');

        $(".calendar").on('click', function() {
            $(".v-calendar").addClass('mini');
        });

        var sections = $('section'),
            nav = $('.calendar');

        $(".v-info").on('scroll', function() {
            if ($(".v-info").scrollTop() > 0) {
                $(".v-calendar").addClass('mini');
            } else {
                $(".v-calendar").removeClass('mini');
            }

            let calendarRect = calendar.getBoundingClientRect();
            let curPos = calendarRect.top + calendarRect.height;

            sections.each(function() {
                let rect = this.getBoundingClientRect();
                let style = window.getComputedStyle(this);
                let top = rect.top - parseInt(style['margin-top'], 10);
                let bottom = rect.bottom;

                if (curPos >= top && curPos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        });

        nav.find('a').on('click', function() {
            var $el = $(this),
                id = $el.attr('href');

            $(".v-info").animate({
                scrollTop: $(id).offset().top
            }, 500);

            return false;
        });
    </script>
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
