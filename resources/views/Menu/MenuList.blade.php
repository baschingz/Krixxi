@extends('layout.main')
@section('import')
    <script src="{{asset('js/slide/slide.js')}}"></script>
    <script src="{{asset('js/slide/jssor.slider-27.2.0.min.js')}}" type="text/javascript"></script>
@endsection
@section('body')
<<<<<<< HEAD


<div class="bg-menu-page">
<div ng-controller="MenuController" ng-init="init()" id="init" >    
    <script src="jssor.slider.min.js"></script>
        <div id="jssor_1" class="slide-index1">
            <div data-u="slides" class="slide-index2">
                <div ng-repeat="image in images">    
                    <div  class="mySlides" >
                        <img src='<% image.img_base64 %>' data-u="image" width="100%"  > 
                    </div>
                </div>     
                                     
            </div>                                
    </div>

    <script>
        var options = { $AutoPlay: 1 };
        var jssor_1_slider = new $JssorSlider$("jssor_1", options);
    </script>
</div>

<div class="container">
   <div class="row">
        <div class="col-sm-6 card margin-left-six">
            <img src="{{asset('image/menu/date.jpg')}}" class="img-size">
            <div class="container">
                <h4><b class="text-bottom1">ค้นหาวันที่ต้องการ</b></h4>     
=======
    <div id="jssor_1"
         style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin"
             style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg"/>
        </div>
        <div data-u="slides"
             style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170">
                <img data-u="image" src="img/001.jpg"/>
>>>>>>> 5789a5695f389f8832b5a33c0b92dd56c4e5e445
            </div>
            <div data-p="170">
                <img data-u="image" src="img/002.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/003.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/004.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/005.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/006.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/007.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/008.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/009.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/010.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/011.jpg"/>
            </div>
            <div data-p="170">
                <img data-u="image" src="img/012.jpg"/>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1"
             data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2"
             data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;"
             data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>


@endsection

@section('script')
    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");

            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 2000);
        }

    </script>
    <script src="{{asset('js/Menu/MenuJS.js')}}"></script>
@endsection