<!doctype html>
<html lang="{{ app()->getLocale() }}" >
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
	    <link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}"/> 
    </head>
    <body>
		
        <div id="div1" class="font1" hidden>Krixxi </div>
		<div id="div2" class="font2" hidden>keep memory</div>
		<div>
		<button id="bnt1" class="btn1" >test</button>
		</div>
        
		<div id="login" hidden>
		<label>username :</label>
		<input type="text"><br>
		<label>password :</label>
		<input type="text"><br>
		<input type="button">
		</div>
    </body>
		<script>
			$(function(){			
			$('#div1').slideDown("slow");
			$('#div2').slideDown("slow");
			
			$('#bnt1').click(function(){
				$('#div1').hide( "slow" );
				$('#div2').hide( "slow" );
				$('#bnt1').hide( "slow" );
				$('#login').slideDown("slow");
			});
			});		
		</script>
</html>


