
<nav class = "navbar has-shadow">
<div class = "container ">
    
<div class = "navbar-menu">

    <!-- Left Side -->
    <div class = "navbar-start">  
            
        <a class = "navbar-item is-tab is-active" href = "{{ url('/') }}">
            {{ config('app.name', 'testsite') }}
        </a>
        
    <!-- ?? make a component of navbar-item maybe ?? 
        <a class = "navbar-item" href = "">
            State
        </a>
            -->
    </div>


    <!-- Right Side -->
    <div class = "navbar-end"> 

    <!-- Authentication Links -->    
    @guest
        <a class = "navbar-item" href = "{{ route('login') }}   "> Login </a>
        <a class = "navbar-item" href = "{{ route('register') }}"> Register </a>

    @else    
        <div class = "navbar-item has-dropdown is-hoverable">
            <a 
                class = "navbar-link is-active" 
                href  = ""
            >
                {{ Auth::user()->name }} <span class = "caret"></span>
            </a>
                    
            <div class = "navbar-dropdown">
                <a 
                    class   = "navbar-item" 
                    href    = "{{ route('logout') }}"
                    onclick = "event.preventDefault(); 
                    document.getElementById('logout-form').submit();"
                >
                    Logout
                </a>

                <form 
                    id     = "logout-form" 
                    action = "{{ route('logout') }}" 
                    method = "POST"
                >
                    {{ csrf_field() }}
                </form>

            </div>

        </div>

    @endguest
    </div>
                    
</div>

</div>
</nav>
