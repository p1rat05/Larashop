@section("loginpart")
    @guest
    <a class="btn btn-sm btn-primary" href="{{ route('login') }}" id="lgnbt">Login</a>
    <a class="btn btn-sm btn-success" href="{{ route('register') }}" id="rgbt">Register</a>
    <div class="hidden position-absolute" id="lgnform">
        <form method="post" action="/">
            <div class="input-group mb-1">
                <input type="email" class="form-control" placeholder="E-mail" name="email" id="eml">
            </div>
            {{csrf_field()}}
            <div class="input-group mb-1">
                <input type="password" class="form-control" placeholder="Пароль" name="pwd" id="pwd">
            </div>
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-success" name="LogIn">
            </div>
        </form>
    </div>
    <script>
        $.when($.ready).then(function(){
            $('#lgnform').css({'position': 'absolute',
            'left' : ($(document).width()/2-$('#lgnform').width()/2)+'px',
            'top' : ($(document).height()/2-$('#lgnform').height()/2)+'px',
            'background': 'blue'});
        });
    </script>
    <style>
        #lgnform
        {
            width: 300px;
            height: 300px;
        }
    </style>
    @else
        <a class="btn btn-sm btn-warning" href="{{ route('logout') }}">LogOut</a>
    @endguest
@endsection
