<!doctype html>
<html ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Krixxi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <!-- Styles -->
        <style>
            .font1{
                font-size:145 px;
            }
        </style>
    </head>
    <body >
        <h1 class="font1">test</h1>
        <a href="photographerlist"><input type="button" value="ดูช่างภาพ"></a>
        @yield('body')


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
        <script type="text/javascript">
            var base_path = "{{url('/')}}";
        </script>



        @yield('script')
    </body>
</html>
