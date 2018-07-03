@extends('layout.main')
@section('body')
<h1>test</h1>
<div class="container-fluid">

    <div class="row">
        <div class="col-xs-6" stlye="background-color:red;">test</div>
        <div class="col-xs-6" stlye="background-color:red;">test</div>
    </div>
    <div class="row">
        <div class="col-xs-6" stlye="background-color:red;">test</div>
        <div class="col-xs-6" stlye="background-color:red;">test</div>
    </div>

</div>
@endsection

@section('script')
<script src="{{asset('js/Menu/MenuJS.js')}}"></script>
@endsection