<!doctype html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Krixxi</title>

    <link rel="icon" href="{{asset('image/icon/Icon-20.png')}}" type="image/x-icon"/>
    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/background.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/loading.css')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Yantramanav:100,200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/all.css')}}" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,regular,500,600,700&subset=latin-ext,vietnamese,latin,cyrillic"
          rel="stylesheet" type="text/css"/>
    @yield('import')
</head>
<body class="bg-menu">
<!-- <header style="margin-bottom:50px;">-->
<header class="margin-bottom-menu">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="col-md-2">
                <div class="navbar-header">
                    <a class="navbar-brand logo-size" href="menu">Krixxi</a>
                </div>
            </div>
            <div class="col-md-10">
                <!-- <div class="navbar-flex">
                    <ul class="nav navbar-nav navbar-ul navbar-right">
                        <li><a class="glyphicon glyphicon-th-large" href="menu"></a></li>
                        <li><a class="glyphicon glyphicon-user" href="#"></a></li>
                        <li><a class="glyphicon glyphicon-comment" href="#"></a></li>
                        <li><a class="glyphicon glyphicon-search" href="search"></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </nav>
</header>

<br>
<nav>
    @yield('body')
</nav>
<section style="margin-top:5%;">
    <footer class="footer navbar-bottom">
        <div class="container">
            <div class="col-sm-12 col-sm-offset-1">
                <div class="col-sm-4 logo-size">
                    Krixxi
                </div>
                <div class="col-sm-4">
                    <div class="footer_contact">
                        <ul class="nav">
                            <li>Contact us</li>
                            <li>E-mail : Krixxi@gmail.com</li>
                            <li>Tel : 098-107-5755</li>
                            <li>Facebook : Krixxi แหล่งรวมช่างภาพ</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 footer_copyright">
                    &copy; copyright Krixxi 2018
                </div>
            </div>
        </div>
    </footer>
</section>
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
