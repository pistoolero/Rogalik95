@layout('layouts/auth')
@section('content')
    <form class="login-form"  method="post" accept-charset="utf-8" action="{{base_url('auth/login')}}">
        <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>

        </p>
        <div id="infoMessage" class="white-text text-center">{{$message}}</div>

        <input type="text" class="login-username" autofocus="true" required="true" name="identity" placeholder="Nazwa użytkownika" />
        <input type="password" class="login-password" required="true" placeholder="Hasło" name="password" />
        <input type="submit" name="Login" value="Login" class="login-submit" />
        <a href="/" class="btn btn-outline-default push-3">Back</a>
    </form>
    <a href="#" class="login-forgot-pass">forgot password?</a>
@endsection