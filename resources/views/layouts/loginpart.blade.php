@section('loginpart')
    @guest
    <a class="btn btn-sm btn-primary" href="{{ route('login') }}">Login</a>
    <a class="btn btn-sm btn-success" href="{{ route('register') }}">Register</a>
    <div class="hidden position-absolute">
        <nav class="navbar-dark">
        <form method="post" action="/">
            <div class="form-group">
                <label for="eml">E-mail</label>
                <input type="email" class="form-control form-control-sm" name="email" id="eml">
            </div>
        </form>
        </nav>
    </div>
    @else
        <a class="btn btn-sm btn-warning" href="{{ route('logout') }}">LogOut</a>
    @endguest
@endsection
