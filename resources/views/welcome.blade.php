<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <title>Krixxi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Yantramanav:100" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/docs.min.css')}}"/> -->
</head>
<body class="bg-welcome">
<div id="div1" style="margin-top:10%;" hidden>
    <div class="container">
        <div class="col-md-4 col-md-offset-2" style="margin-top:5%; color:white;">
            <div class="font-welcomepage1">Krixxi</div>
            <div class="font-welcomepage2">Keep memory</div>
            <a href="menu" class="btn btn-info">Get Start</a>
        </div>
        <div class="col-md-4">
            <div style="margin-top:7%;"></div>
            <div id="loginbox" style="opacity: 0.8;" class="mainbox">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title" style="text-align:center;">Sign In</div>
                    </div>
                    <div style="padding-top:30px" class="panel-body">
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form">
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value=""
                                       placeholder="username or email">
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password"
                                       placeholder="password">
                            </div>
                            <div class="input-group">
                                <div class="checkbox">
                                        <span style="width:0%; max-width: 100%; padding-left: 20px; margin-bottom:10px;">
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </span>
                                </div>
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <a id="btn-login" href="menu" class="btn btn-success btn-block">Login </a>
                                    <a id="btn-fblogin" href="#" class="btn btn-primary btn-block">Login with
                                        Facebook</a>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                        Don't have an account!
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
<script>
    $(function () {
        $('#div1').slideDown("slow");

    });
</script>
</html>


