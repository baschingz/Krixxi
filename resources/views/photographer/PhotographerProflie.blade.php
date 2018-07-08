@extends('layout.main')
@section('body')
<div ng-controller="PhotographerController" ng-init="init({{$id}})" >
<div class="card" style="margin-top:-5%;" >
  <img class="card-img" src="<% photographer[0].cover_img %>" style="height:60%;" >
    </div>
    <div class="container-fluid" style="padding-top:1%; padding-bottom:2%;">
        <div class="col-md-3 col-md-offset-1">
           <img src="<% photographer[0].profile_img %>" class="photographer-avatar">
        </div>
        <div class="col-md-4" style="padding-top:3%;">
            <div class="h1"><% photographer[0].penname %></div>
            <div style="font-size:20px;"> Detail : <% photographer[0].description %></div>
            <ul class="list-unstyled" style="font-size:16px;">
            <li><span class="glyphicon glyphicon-user" aria-hidden="true">  Name     :  <% photographer[0].fullname %></span></li>
            <li><span class="glyphicon glyphicon-globe" aria-hidden="true"> Region    :   <% photographer[0].name %></span></li>
            <li><span class="glyphicon glyphicon-phone" aria-hidden="true"> TEL    :  </span></li>
                </ul>
         </div>
         <div class="col-md-3" style="padding-top:8%;">
            <div style="font-size:20px;">Rate</div>
            <ul class="list-unstyled" style="font-size:16px;">
            <li><span class="glyphicon glyphicon-camera" aria-hidden="true"> Half    :  <% photographer[0].parttime %></span></li>
            <li><span class="glyphicon glyphicon-camera" aria-hidden="true"> Full    :  <% photographer[0].fulltime %></span></li>
             </ul>
         </div>
    </div>
    
   <div class="container-fluid album-slide" id="album1">
   <div class="card" style="border: none; padding-bottom:2%;">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('image/Profile_ex/albam1.jpg')}}" class="albam-size card-img">
                <div class="card-img-overlay">
                    <div class="album-title">JAPAN</div>
                </div>
                </div>
            <div class="col-md-8">
                <h3 class="card-title">Japan</h3>
                <img src="{{asset('image/Profile_ex/j1.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j2.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j3.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j4.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j5.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j1.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j2.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j3.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j4.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j5.jpg')}}" class="photo-size">
            </div>
</div>
</div>
<div class="card" style="border: none; padding-bottom:2%;">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('image/Profile_ex/albam2.jpg')}}" class="albam-size card-img">
                <div class="card-img-overlay">
                    <div class="album-title">Album</div>
                </div>
                </div>
            <div class="col-md-8">
                <h3 class="card-title">Album</h3>
                <img src="{{asset('image/Profile_ex/j1.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j2.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j3.jpg')}}" class="photo-size">
                <img src="{{asset('image/Profile_ex/j4.jpg')}}" class="photo-size">
            </div>
</div>
</div>
    </div>
    <div class="container-fluid" style="margin-top:3%;">
        <div class="col-md-6 col-md-offset-3">
            <label class="comment-label">Comments</label>
                <div class="media comments-list">
                    <div class="media-left media-top">
                    <img src="{{asset('image/Profile_ex/avatar_ex.png')}}" class="comment-avatar">
                    </div>
                    <div class="media-body">
                    <h4 class="media-heading">Username</h4>
                    hello
                    </div>
                    <div class="comment-time">07/07/2018 12:28 PM</div>
                    </div>
                <div class="media">
                <div class="media-left media-top">
                <img src="{{asset('image/Profile_ex/avatar_ex.png')}}" class="comment-avatar">
                </div>
                    <div class="media-body">
                    <h4 class="media-heading">Username</h4>
                    <div id="comment1"><input type="text" class="form-control" placeholder="Comment"></div>
                    <div id="comment2" hidden><textarea class="form-control" rows="3" autofocus placeholder="Comment"></textarea>
                    <div style="margin-top:5px;">
                    <button type="button" class="btn-comment">Send</button>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
@endsection

@section('script')
<script>
    $('#comment1').click(function(){
        $('#comment1').hide();
        $('#comment2').show();
                
    });
    $(document).ready(function(){
       var count1 = $('div.album-slide').children().length;
       if (count1 > 1){
           $('#album1').css("overflow-y","scroll");
       }
   });
</script>
    

<script src="{{asset('js/Photographer/PhotographerJS.js')}}"></script>
@endsection