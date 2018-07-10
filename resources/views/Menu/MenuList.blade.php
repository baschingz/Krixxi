@extends('layout.main')
@section('import')
    <script src="{{asset('js/slide/slide.js')}}"></script>
    <script src="{{asset('js/slide/jssor.slider-27.2.0.min.js')}}" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/card.css')}}">

@endsection
@section('body')

    <!-- SLIDE -->
    <section>
        <div ng-controller="MenuController" ng-init="init()">
            <div class="bg-slide">
                <div id="jssor_1" class="slide-show-menu-page">
                    <!-- Loading Screen -->
                    <div data-u="slides" class="slide-cursor">
                        <div data-p="170">
                            <img data-u="image" src="<% images[0].imgindex_base64 %>"/>
                            <div data-u="caption" data-t="3" class="font-index">Krixxi</div>
                            <div data-u="caption" data-t="3" class="font-index2">Keep memory</div>
                        </div>
                        <div data-p="170">
                            <img data-u="image" src="<% images[1].imgindex_base64 %>"/>
                            <div data-u="caption" data-t="3" class="font-index">Krixxi</div>
                            <div data-u="caption" data-t="3" class="font-index3">คลิกทุกสเต็ป ตอบโจทย์ทุกสไตล์</div>
                        </div>
                        <div data-p="170">
                            <img data-u="image" src="<% images[2].imgindex_base64 %>"/>
                            <div data-u="caption" data-t="3" class="font-index4">รับปริญญาหนึ่งครั้งในชีวิต ฝากความทรงจำไว้ที่เรา</div>
                            <div data-u="caption" data-t="3" class="font-index5">krixxi keep memory</div>
                        </div>
                        <div data-p="170">
                            <img data-u="image" src="<% images[3].imgindex_base64 %>"/>
                            <div data-u="caption" data-t="3" class="font-index6">Your memory</div>
                            <div data-u="caption" data-t="3" class="font-index7">Our memory</div>
                        </div>
                        <div data-p="170">
                            <img data-u="image" src="<% images[4].imgindex_base64 %>"/>
                            <div data-u="caption" data-t="3" class="font-index8">ตอบโจทย์ทุกสไตล์</div>
                        </div>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;"
                         data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewbox="0 0 16000 16000"
                                 style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;"
                         data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
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
            </div>
        </div>
    </section>
    <!-- MENU -->
    <section>
        <div class="container col-sm-offset-2">
            <div class="row">
                <div class="col-sm-12">
                    <a  href= "http://localhost:8000/search">
                    <div class="col-sm-5 card-menu1">
                        <img src="{{asset('image/menu/date.jpg')}}"  class="img-card-size" height="320px">
                        <div class="overlay1">
                            <div class="text">ค้นหาวันที่ต้องการ</div>
                        </div>
                    </div>
                    </a>
                    <div class="col-sm-5 card-menu2">
                        <img src="{{asset('image/menu/lifestyle.jpg')}}" class="img-card-size" height="320px">
                        <div class="overlay2">
                            <div class="text">ไลฟ์สไตล์</div>
                        </div>
                    </div>
                    <div class="col-sm-5 card-menu3">
                        <img src="{{asset('image/menu/promotion.jpg')}}"  class="img-card-size" height="320px">
                        <div class="overlay3">
                            <div class="text">โปรโมชัน</div>
                        </div>
                    </div>
                    <div class="col-sm-5 card-menu3">
                        <img src="{{asset('image/menu/photographer.jpg')}}" class="img-card-size" height="320px">
                        <div class="overlay3">
                            <div class="text">ช่างภาพยอดนิยม</div>
                        </div>
                    </div>
                </div>    
            </div>               
        </div>
    </section>
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