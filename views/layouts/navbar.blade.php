<nav class="navbar is-white">
    <div class="navbar-brand">
        <a class="navbar-item  is-hoverable" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    
    <!-- aria-label="Toggle navigation" // from part from data-toggle till end copied from lv default -->
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
    </a>
    </div>

    <div class="navbar-menu" id="navMenu">
        <!-- Left Side Of Navbar 
        <div class="navbar-start">

        </div>   -->
            
        <!-- Right Side Of Navbar -->
        <div class="navbar-end">
            <!-- Authentication Links -->
            @guest
                <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
            @else
            <div class="navbar-item has-dropdown is-hoverable">                        
                <a id="navbarDropdown" class="navbar-link" href="/profile/{{ Auth::user()->profile->username }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="navbar-dropdown is-right">
                    <a class="navbar-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest
        </div>
    </div>            
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {

                // Get the target from the "data-target" attribute
                var target = $el.dataset.target;
                var $target = document.getElementById(target);

                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
