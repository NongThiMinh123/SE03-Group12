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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/signin.css') }}"/>
        <title>Sign up</title>

        <style>

        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="image-holder"></div>
            <div class="form-inner">
                <div class="form-header">
                    <h3>Sign up</h3>
                </div>

                <div class="form-body">
                    <form method="get" action="{{route('nmn.insert')}}">                                       
                        {{ csrf_field()}}  <!-- Tạo csrf_token(tránh tấn công xss) khi xử lý form trong Laravel -->
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div><br>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div><br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control"  name="password" required>
                        </div>
                        <div class="form-footer">
                            <button type="submit" onlick="">create my account</button>
                        </div>                 
                        <script>
                            var msg = '{{Session::get('alert')}}';
                            var exist = '{{Session::has('alert')}}';
                            if(exist){
                            alert(msg);
                            }
                        </script>
                    </form>
                    <div class="socials">
						<p>Sign up with social accounts</p>
						<div class="social-icons">
                            <ul>
                                <li>
                                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        <div>
					</div>

                </div>

            </div>
            </div>
        </div>
    </body>
</html>