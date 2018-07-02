<!doctype html>
<html lang="{{ app()->getLocale() }}" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <title>Krixxi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	    <link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}"/> 
    </head>
    <body>
		
        <div id="div1" class="font1" hidden>Krixxi </div>
		<div id="div2" class="font2" hidden>keep memory</div>
        
    </body>
        
		<script>
			$(function(){			
			$('#div1').slideDown("slow");
			$('#div2').slideDown("slow");
			});		
		</script>
</html>


