@extends('layout.main')
@section('body')
    <div class="card" style="margin-top:-5%;">
  <img class="card-img" src="{{asset('image/Profile_ex/header_ex.jpg')}}" style="height:60%;" >
    </div>
    <div class="container-fluid" style="padding-top:10; padding-bottom:20;">
        <div class="col-md-3 col-md-offset-1">
            <img src="{{asset('image/Profile_ex/avatar_ex.png')}}" class="img-circle" style="height:256; width:256;">
        </div>
        <div class="col-md-4" style="padding-top:3%;">
            <div class="h1">TOMMY</div>
            <div style="font-size:22;">Detail</div>
            <ul class="list-unstyled" style="font-size:18;">
            <li>Name    :   Thanita</li>
            <li>TEL     :   08x-xxx-xxxx</li>
         </div>
         <div class="col-md-3" style="padding-top:8%;">
            <div style="font-size:22;">Rate</div>
            <ul class="list-unstyled" style="font-size:18;">
            <li>Half    :  2500</li>
            <li>Full    :  3000</li>
         </div>
    </div>
    <div class="card-deck">
        <div class="card">
            <img class="card-img"  src="{{asset('image/Profile_ex/albam1.jpg')}}" style="height:256;">
        </div>
        <div class="card">
            <img class="card-img" src="{{asset('image/Profile_ex/albam2.jpg')}}" style="height:256;">
        </div>
        <div class="card">
            <img class="card-img" src="{{asset('image/Profile_ex/albam3.jpg')}}" style="height:256;">
        </div>
    </div>

    <div class="container-fiuid" style="margin-top:30;">
        <div class="col-md-6 col-md-offset-3">
            <label class="comment-label">Comments</label>
            <div class="comments-list">
            <div class="media">
            <div class="media-left media-top">
                <img class="img-circle" src="{{asset('image/Profile_ex/avatar_ex.png')}}" style="width:64;">
            </div>
                <div class="media-body">
                <h4 class="media-heading">Username</h4>
                   hello
                </div>
                <div class="comment-time">07/07/2018 12:28 PM</div>
                </div>
                <div class="media">
            <div class="media-left media-top">
                <img class="img-circle" src="{{asset('image/Profile_ex/avatar_ex.png')}}" style="width:64;">
            </div>
                <div class="media-body">
                <h4 class="media-heading">Username</h4>
                   Beautiful
                </div>
                <div class="comment-time">07/07/2018 12:28 PM</div>
                </div>
            </div>
            <div class="media">
            <div class="media-left media-top">
                <img class="img-circle" src="{{asset('image/Profile_ex/avatar_ex.png')}}" style="width:64;">
            </div>
                <div class="media-body">
                <h4 class="media-heading">Username</h4>
                <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                <div style="margin-top:5px;">
                <button type="button" class="btn-comment">Send</button>
                </div>
            </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>

@endsection
<div ng-controller="PhotographerController" ng-init="init({{$id}})">

</div>
@section('script')
<script src="{{asset('js/Photographer/PhotographerJS.js')}}"></script>
@endsection