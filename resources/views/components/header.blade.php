<header>
    <h1>this is the header</h1>
    @guest
    <h3>Login</h3>

    <form action="{{route('login')}}" method="POST">
        @method('POST')
        @csrf

        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">

        <button type="submit">Login</button>
    </form>
    <h4>or</h4>
    <h3>Register</h3>
    <form action="{{route('register')}}" method="POST">
        @method('POST')
        @csrf

        <label for="name">Nickname</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation">

        <button type="submit">Register</button>
    </form>
    @endguest
    @auth
        <h3>Welcome <b>{{Auth::user() -> name}}</b></h3>
        <a href="{{route ('logout')}}" class="btn btn-danger">Logout</a>
    @endauth
</header>