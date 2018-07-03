<!doctype html>
<html ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Krixxi</title>

        <link rel="icon" href="{{asset('image/icon/Icon-20.png')}}" type="image/x-icon" />
        <!-- Fonts -->        
        <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}"/> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>

        <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
        <!-- Styles -->
        @yield('import')
    </head>
    <body >
    <header style="margin-bottom:50px;">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="menu">Krixxi</a>
            </div>
            <ul class="nav navbar-nav">
            <li><a  class="glyphicon glyphicon-th-large" href="menu"></a></li>
            <li><a class="glyphicon glyphicon-user" href="#"></a></li>
            <li><a class="glyphicon glyphicon-comment" href="#"></a></li>
            <li><a class="glyphicon glyphicon-search" href="search"></a></li>
            </ul>
        </div>
    </nav>
<<<<<<< HEAD
=======
    
>>>>>>> ed43512fb35483025325ff6c60bd9c1c83014428
    </header>      
   
    <br>
        
        
        @yield('body')
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/i18n/datepicker.th-TH.js"></script>
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
