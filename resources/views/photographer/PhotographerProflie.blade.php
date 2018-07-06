@extends('layout.main')
@section('body')
    <div class="card" style="margin-top:-5%;">
  <img class="card-img" src="{{asset('image/Profile_ex/header_ex.jpg')}}" style="height:60%;" >
    </div>
    <div class="container-fluid" style="padding-top:10; padding-bottom:20;">
        <div class="col-md-3 col-md-offset-1">
            <img src="{{asset('image/Profile_ex/avatar_ex.png')}}" style="height:256; width:256;">
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

@endsection
<div ng-controller="PhotographerController" ng-init="init({{$id}})">

</div>
@section('script')

<script src="{{asset('js/Photographer/PhotographerJS.js')}}"></script>
@endsection