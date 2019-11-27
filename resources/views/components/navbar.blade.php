<div class="uk-container uk-container-expand uk-section-primary">
    <nav class="uk-navbar">
        <div class="uk-navbar-left">
            <a href="/" uk-icon="icon: sign-in; ratio: 2" class="uk-navbar-item uk-logo"></a>
            <p>Home</p>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@m">
                <li>
                    <a href="">Pro</a>
                </li>
                <li class="">
                    <a href="./">Documentation</a>
                </li>
                <li>
                    @auth
                        <a href="">name: {{ Auth::user()->name }}</a>
                    @endauth
                    @guest
                        <a href="">guest</a>
                    @endguest
                </li>
            </ul>
            <div class="uk-navbar-item uk-visible@m">
                @guest
                <a href="/login" class="uk-button uk-button-default tm-button-default uk-icon uk-border-rounded">
                    login
                    <canvas uk-icon="icon: download" width="20" height="20" class="uk-icon" hidden="true"></canvas>
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="download">
                        <polyline fill="none" stroke="#000" points="14,10 9.5,14.5 5,10"></polyline>
                        <rect x="3" y="17" width="13" height="1"></rect>
                        <line fill="none" stroke="#000" x1="9.5" y1="13.91" x2="9.5" y2="3"></line>
                    </svg>
                </a>
                @endguest
                @auth
                <form action="/logout" method="POST">
                    <button class="uk-button uk-button-default tm-button-default uk-icon uk-border-rounded">
                        @csrf
                        logout
                        <canvas uk-icon="icon: download" width="20" height="20" class="uk-icon" hidden="true"></canvas>
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="download">
                            <polyline fill="none" stroke="#000" points="14,10 9.5,14.5 5,10"></polyline>
                            <rect x="3" y="17" width="13" height="1"></rect>
                            <line fill="none" stroke="#000" x1="9.5" y1="13.91" x2="9.5" y2="3"></line>
                        </svg>
                    </button>
                </form>
                @endauth
            </div>
            <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon">
                    <rect y="9" width="20" height="2"></rect>
                    <rect y="3" width="20" height="2"></rect>
                    <rect y="15" width="20" height="2"></rect>
                </svg>
            </a>
        </div>
    </nav>
</div>
