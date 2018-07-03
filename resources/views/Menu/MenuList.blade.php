@extends('layout.main')
@section('import')
<style>
.mySlides {display:none;}
</style>
@endsection
@section('body')

<div ng-controller="MenuController" ng-init="init()" id="init" >    
    <script src="jssor.slider.min.js"></script>
        <div id="jssor_1" style="position:relative;top:0px;left:0px;width:100%;height:380px;overflow:hidden;">
        <div data-u="slides" style="position:absolute;top:0px;left:0px;width:100%;height:380px;overflow:hidden;">
        <div ng-repeat="p in photographers">    
        <div  class="mySlides" ><img src='<% p.img_base64 %>' data-u="image" width="70%"  height="500px"> </div>
        </div>                               
        </div>                                
</div>
<script>
    var options = { $AutoPlay: 1 };
    var jssor_1_slider = new $JssorSlider$("jssor_1", options);
</script>

</div>


<div class="container">



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