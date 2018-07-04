@extends('layout.main')
@section('import')
    <script src="{{asset('js/slide/slide.js')}}"></script>
    <script src="{{asset('js/slide/jssor.slider-27.2.0.min.js')}}" type="text/javascript"></script>
@endsection
@section('body')

<!-- SLIDE -->
    <div class="bg-menu">
        <div class="bg-slide">
            <div id="jssor_1" class="slide-show-menu-page">
                <!-- Loading Screen -->
                <div data-u="slides" class="slide-cursor">
                    <div data-p="170">
                        <img data-u="image" src="{{asset('image/menu/promotion.jpg')}}"/>
                    </div>
                    <div data-p="170">
                        <img data-u="image" src="{{asset('image/menu/photographer.jpg')}}"/>
                    </div>
                    <div data-p="170">
                        <img data-u="image" src="{{asset('image/menu/promotion.jpg')}}"/>
                    </div>
                    <div data-p="170">
                        <img data-u="image" src="{{asset('image/menu/photographer.jpg')}}"/>
                    </div>
                    <div data-p="170">
                        <img data-u="image" src="{{asset('image/menu/date.jpg')}}"/>
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;"
                     data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
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
    

    <!-- MENU -->
    <div class="container">
   <div class="row">
        <div class="col-sm-6 card margin-left-six">
            <img src="{{asset('image/menu/date.jpg')}}" class="img-size">
            <div class="container">
                <h4><b class="text-bottom1">ค้นหาวันที่ต้องการ</b></h4>     
            </div>
            <div class="overlay">
                <div class="text">ค้นหาวันที่ต้องการ</div>
            </div>
        </div>

         <div class="col-sm-6 card margin-left-ten">
            <img src="{{asset('image/menu/lifestyle.jpg')}}" class="img-size">
            <div class="container">
                <h4><b class="text-bottom2">ไลฟ์สไตล์</b></h4>     
            </div>
            <div class="overlay">
                <div class="text">ไลฟ์สไตล์</div>
            </div>
        </div>

         <div class="col-sm-6 card margin-left-six">
            <img src="{{asset('image/menu/promotion.jpg')}}"  class="img-size">
            <div class="container1">
                <h4><b class="text-bottom2">โปรโมชัน</b></h4>     
            </div>
            <div class="overlay">
                <div class="text">โปรโมชัน</div>
            </div>
        </div>

         <div class="col-sm-6 card margin-left-ten">
            <img src="{{asset('image/menu/photographer.jpg')}}" class="img-size">
            <div class="container">
                <h4><b class="text-bottom1">ช่างภาพยอดนิยม</b></h4>     
            </div>
            <div class="overlay">
                <div class="text">ช่างภาพยอดนิยม</div>
            </div>
        </div>
   </div>        
</div>

</div>
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