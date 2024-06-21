<nav class="nav">
    <ul>
        <li><a href="{{ route('index') }}">Home</a></li>
        @auth
            <li><a href="{{ route('calender.index') }}">Calender</a></li>
        @endauth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Events
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('siminar.index') }}">Seminars</a></li>
                <li><a class="dropdown-item" href="{{ route('joboffer.index') }}">Job offers</a></li>
                <li><a class="dropdown-item" href="{{ route('trip.index') }}">Trips</a></li>
            </ul>
        </li>
        <li><a href="{{ route('aboutus.index') }}">About us</a></li>
        <li><a href="{{ route('feedback.index') }}">Feedback</a></li>
        @guest
            <li><a href="{{ route('login.index') }}">Sign In</a></li>
        @endguest
        @auth
            <li><a href="{{ route('logout') }}">Sign Out</a></li>
        @endauth
    </ul>
</nav>
