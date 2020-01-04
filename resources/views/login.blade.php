<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="/css/home.css" rel="stylesheet" type='text/css'> -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"/>
        <title>Login</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="image-holder"></div>
            <div class="form-inner">
                <div class="form-header">
                    <h3>Log in</h3>
                </div>
                <div class="form-body">
                    <form class="has-validation-callback" method="get" action="{{route('nmn.logindone')}}">                                       
                        {{ csrf_field()}} 
                        @if(session('alert'))
			                <section class="alert alert-danger">{{session('alert')}}</section>
			            @endif
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div><br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control"  name="password" required>
                        </div>
                        <div class="remember">
                            <input type="checkbox"> Remember me
                            <a href="#">Forgot Password?</a>
                        </div>
                        <div class="form-footer">
                            <button type="submit">Log in</button>
                        </div>   
                    </form>
                    <form class="has-validation-callback" method="get" action="{{route('nmn.signup')}}">
                        <div>
                            <button type="submit">Sign up</button>
                        </div>                   
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
