<!doctype html>
<html ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Krixxi</title>
        <!-- Fonts -->        
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}"/> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/docs.min.css')}}"/>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
        <!-- Styles -->
        
    </head>
    <body >      
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <ul class="nav navbar-nav nav-center">
        <li><a class="glyphicon glyphicon-th-large" href="menu"></a></li>
        <li><a class="glyphicon glyphicon-user" href="#"></a></li>
        <li><a class="glyphicon glyphicon-comment" href="#"></a></li>
        <li><a class="glyphicon glyphicon-pushpin" href="#"></a></li>
        </ul>
    </div>
    </nav>
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
