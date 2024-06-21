@extends('site.layouts.app')
@section('title', 'Feedback - The Event Catcher')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/cs/about.css') }}">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);

        .feedback {
            margin-top: 70px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

        figure.snip1390 {
            font-family: 'Roboto', Arial, sans-serif;
            position: relative;
            overflow: hidden;
            margin: 10px;
            min-width: 230px;
            max-width: 315px;
            width: 100%;
            color: #000000;
            text-align: center;
            font-size: 16px;
            background-color: #2C3447;
            padding: 30px;
            background-image: linear-gradient(-25deg, rgba(0, 0, 0, 0.2) 0%, rgba(255, 255, 255, 0.1) 100%);
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        figure.snip1390 *,
        figure.snip1390 *:before,
        figure.snip1390 *:after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.35s ease;
            transition: all 0.35s ease;
        }

        figure.snip1390 figcaption {
            width: 100%;
        }

        figure.snip1390 h2,
        figure.snip1390 h4,
        figure.snip1390 blockquote {
            margin: 0;
        }

        figure.snip1390 h2,
        figure.snip1390 h4 {
            font-weight: 300;
        }

        figure.snip1390 h2 {
            color: #ffffff;
        }

        figure.snip1390 h4 {
            color: #a6a6a6;
        }

        figure.snip1390 blockquote {
            font-size: 1em;
            padding: 45px 20px 40px 50px;
            margin-top: 30px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: inset -1.4px -1.4px 2px rgba(0, 0, 0, 0.3);
            text-align: left;
            position: relative;
        }

        figure.snip1390 blockquote:before {
            font-family: 'FontAwesome';
            content: "\201C";
            position: absolute;
            font-size: 70px;
            opacity: 0.25;
            font-style: normal;
            top: 0px;
            left: 20px;
        }

        figure.snip1390 .profile {
            width: 100px;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.4);
            margin-bottom: 10px;
            border: solid 5px #A6A57A;
        }
    </style>
@endpush
@section('content')
    @include('site.includes.navbar')
    <div class="feedback">
        <figure class="snip1390">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample3.jpg" alt="profile-sample3"
                class="profile" />
            <figcaption>
                <h2>Eleanor Crisp</h2>
                <h4>UX Design</h4>
                <blockquote>Dad buried in landslide! Jubilant throngs fill streets! Stunned father inconsolable - demands
                    recount!</blockquote>
            </figcaption>
        </figure>
        <figure class="snip1390 hover"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample5.jpg"
                alt="profile-sample5" class="profile" />
            <figcaption>
                <h2>Gordon Norman</h2>
                <h4>Accountant</h4>
                <blockquote>Wormwood : Calvin, how about you? Calvin : Hard to say ma'am. I think my cerebellum has just
                    fused.
                </blockquote>
            </figcaption>
        </figure>
        <figure class="snip1390"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample6.jpg"
                alt="profile-sample6" class="profile" />
            <figcaption>
                <h2>Sue Shei</h2>
                <h4>Public Relations</h4>
                <blockquote>The strength to change what I can, the inability to accept what I can't and the incapacity to
                    tell
                    the difference.</blockquote>
            </figcaption>
        </figure>
    </div>
@endsection
@push('script')
    <script>
        $(".hover").mouseleave(
            function() {
                $(this).removeClass("hover");
            }
        );
    </script>
@endpush
