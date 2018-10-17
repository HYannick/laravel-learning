<header>
    <div class="container">
        <a class="logo" href="/">Bloggy-Sheep</a>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/">News</a></li>
            <li><a href="/">Press</a></li>
            <li><a href="/">About</a></li>
            <li><a href="/">Contact</a></li>
        </ul>

        <div class="profile">
            @if(Auth::check())
                <div class="avatar">
                    <img src="/images/44a8eef73f26d6b57c1be5fc06f13dc9.jpg"/>
                </div>
                <a href="/profile">{{Auth::user()->name}}</a>
                <a href="/logout">Logout</a>
            @else
                <a href="/register">Register</a>
                <a href="/login">Login</a>
            @endif
        </div>
    </div>
</header>