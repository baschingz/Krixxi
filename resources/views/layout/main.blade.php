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
        <link href="https://fonts.googleapis.com/css?family=Yantramanav:100" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
        <!-- Styles -->
        @yield('import')
    </head>
    <body >
    <!-- <header style="margin-bottom:50px;">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="col-md-2">
            <div class="navbar-header">
            <a class="navbar-brand" href="menu">Krixxi</a>
            </div>
<<<<<<< HEAD
        </div>
            <!-- <ul class="nav navbar-nav" style="margin-left:40%; margin-right:40%;">
=======
            <ul class="nav navbar-nav" style="margin-left:40%; margin-right:40%;">
>>>>>>> 8be4aa94a41119701cbc795d8710dec0ac29d196
            <li><a  class="glyphicon glyphicon-th-large" href="menu"></a></li>
            <li><a class="glyphicon glyphicon-user" href="#"></a></li>
            <li><a class="glyphicon glyphicon-comment" href="#"></a></li>
            <li><a class="glyphicon glyphicon-search" href="search"></a></li>
<<<<<<< HEAD
            </ul>  -->
            <div class="col-md-10">
                <div class="navbar-flex">
            <ul class="nav navbar-nav navbar-ul navbar-right">
                <li ><a class="glyphicon glyphicon-th-large" href="menu"></a></li>
                <li><a class="glyphicon glyphicon-user" href="#"></a></li>
                <li><a class="glyphicon glyphicon-comment" href="#"></a></li>
                <li><a class="glyphicon glyphicon-search" href="search"></a></li>
                </ul>

</div>
                </div>
    </nav>
    
    </header>      
   
=======
            </ul> 
        </div>
    </nav>
    </header>       -->

>>>>>>> 8be4aa94a41119701cbc795d8710dec0ac29d196
    <br>
    <nav>
    @yield('body')
    </nav> 
     <footer class="navbar-inverse navbar-bottom">
         <div class="container">
       <div class="col-md-4">
        <div>Krixxi</div>
        </div>
       <div class="col-md-4">
        <div>Contact us</div>
        <div>E-mail : Krixxi@gmail.com</div>
        <div>Tel : 098-107-5755</div>
        <div>Facebook : Krixxi แหล่งรวมช่างภาพ</div>
       </div>
       <div class="col-md-4"></div>
        <div >@ copyright Krixxi 2018</div>
       </div>
     </footer>   
      
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
