@extends('layout.main')
@section('body')

@endsection
<div ng-controller="PhotographerController" ng-init="init({{$id}})">
<div><% photographer.penname %></div>
<div><% photographer.tel %></div>
<div><% photographer.description %></div>
<div><% photographer.rate %></div>
</div>
@section('script')

<script src="{{asset('js/Photographer/PhotographerJS.js')}}"></script>
@endsection