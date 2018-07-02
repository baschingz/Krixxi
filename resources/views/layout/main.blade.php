<!doctype html>
<html ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Krixxi</title>
<<<<<<< HEAD:resources/views/layout/main.blade.php
        <!-- Fonts -->        
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('public/css/background.css') }}" >
=======

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
>>>>>>> 8a862f4fe0a2e8f1a316cfbb726fcffa0986892b:resources/views/layout/index.blade.php
        <!-- Styles -->
        <style>
            .font1{
                font-size:145 px;
            }
        </style>
    </head>
    <body >      
    
        @yield('body')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.10/angular-material.min.js"></script>
        <script type="text/javascript">
        var base_path = "{{url('/')}}";
        </script>
        @yield('script')
    </body>
</html>
