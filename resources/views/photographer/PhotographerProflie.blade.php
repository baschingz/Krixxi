@extends('layout.main')
@section('body')
    <div style="margin-top:-5%;">
    <img style="width:100%; height:50%;" src="{{asset('image/Profile_ex/header_ex.jpg')}}">
        <div>
        <div class="container-fluid" style="background-color:white; padding-left:0; padding-right:0;">
        <div class="col-md-3">
        <div style="margin-left:30%; margin-right:20%; margin-top:15;">
        <img src="{{asset('image/Profile_ex/avatar_ex.png')}}" class="img-circle">
        </div>
        <div class="col-md-4">
         detail
        </div>
        <div class="col-md-4">
        rate
        </div>
        </div>
    </div>
@endsection
<div ng-controller="PhotographerController" ng-init="init({{$id}})">

</div>
@section('script')

<script src="{{asset('js/Photographer/PhotographerJS.js')}}"></script>
@endsection