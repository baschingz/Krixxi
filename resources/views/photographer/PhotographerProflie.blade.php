@extends('layout.main')
@section('body')

@endsection
<div ng-controller="PhotographerController" ng-init="init({{$id}})">

</div>
@section('script')

<script src="{{asset('js/Photographer/PhotographerJS.js')}}"></script>
@endsection