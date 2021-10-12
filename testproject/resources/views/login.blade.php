<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if(Session::has('msg'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('msg')}}
    </div>
    @endif
    <form action="{{ URL::to('logincheck')}}" method="post">
        {{ csrf_field() }}
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username or Email</label>
                            <input id="user" type="text" class="input" name="user">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="pass">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In" name="login">
                        </div>
                        <div class="hr"></div>
                    </div>
                    <div class="for-pwd-htm">
                        <div class="group">
                            <label for="user" class="label">Username or Email</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Reset Password">
                        </div>
                        <div class="hr"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>