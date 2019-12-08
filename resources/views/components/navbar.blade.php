<header>
    <div class="login-form">
        @guest
            <a href="login" class="login-button">
                <i class="fa fa-key "></i>
                <p>Login</p>
            </a>
        @endguest
        @auth
            <form action="/logout" method="POST">
                <button type="submit" class="login-button">
                    @csrf
                    <i class="fa fa-sign-out"></i>
                    <p>Logout</p>
                </button>
            </form>
        @endauth
        <div class="login-user">
            <p>User: john</p>
        </div>
    </div>
</header>
