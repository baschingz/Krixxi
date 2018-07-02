<!doctype html>
<html lang="{{ app()->getLocale() }}" np-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <title>Krixxi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
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
        @yield('body')
    </body>
         @yield('script')
		<script>
			$(function(){
			
			$('#div1').slideDown("slow");
			$('#div2').slideDown("slow");

			});		
		</script>
</html>


