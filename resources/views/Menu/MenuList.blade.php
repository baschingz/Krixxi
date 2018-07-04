@extends('layout.main')
@section('import')
<style>
.mySlides {display:none;}
</style>
@endsection
@section('body')


<div class="bg-menu-page">
<div ng-controller="MenuController" ng-init="init()" id="init" >    
    <script src="jssor.slider.min.js"></script>
        <div id="jssor_1" class="slide-index1">
            <div data-u="slides" class="slide-index2">
                <div ng-repeat="p in photographers">    
                    <div  class="mySlides" >
                        <img src='<% p.img_base64 %>' data-u="image" width="100%"  > 
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
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); 
}

</script>
<script src="{{asset('js/Menu/MenuJS.js')}}"></script>
@endsection