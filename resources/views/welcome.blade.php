<!doctype html>
<html lang="{{ app()->getLocale() }}" np-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
		<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.css">
		
        <title>Krixxi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Kanit:300&amp;subset=thai" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yantramanav:100" rel="stylesheet">
        <!-- Styles -->
        <style>
<<<<<<< HEAD
		html { 
			  background: url("{{asset('images/cover/cover.jpg')}}") no-repeat center center fixed; 
			  background-image:url("{{asset('images/cover/cover.jpg')}}") ;
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			}

		.font1{
		font-size:150px;
		margin-left:20%;
		margin-top:12%;
		margin-right:20%;
		color:#F9FAF9;
		}

		.font2{
		font-size:50px;
		margin-left:20%;
		color:#F9FAF9;
		}

        </style>
    </head>
    <body>
		
        <div id="div1" class="font1" hidden>Krixxi </div>
		<div id="div2" class="font2" hidden>keep memory</div>
=======
		
        </style>
    </head>
    <body>

		<div class="container">
		    <div class="row justify-content-center margin-top-twentyseven">
                <div class="col-md-7">
                    <div id="div1" class="font1" >Krixxi </div>
                    <div id="div2" class="font2" >keep memory</div>
                </div>
                <div class="col-md-5 bg-login-welcome-page ">
                    <h2 class="margin-login">เข้าสู่ระบบ</h2>
                    <div class="col-md-offset-2 form-group margin-top-four width-login-welcome-page">
                        <input type="text" class="form-control form-control-lg" placeholder="login"> 
                    </div>
                    <div class="margin-top-three">                     
                        <button class="col-md-offset-2 btn btn-primary width-login-welcome-page">Login</button>
                    </div>
                </div>
            </div>
		</div>
        
>>>>>>> 8a862f4fe0a2e8f1a316cfbb726fcffa0986892b
        @yield('body')
    </body>
		 @yield('script')
		<script src="../../bootstrap.js"></script>
		<script>
			$(function(){
			
			$('#div1').slideDown("slow");
			$('#div2').slideDown("slow");

			});		
		</script>

</html>


