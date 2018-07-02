@extends('layout.index')
@section('body')
<div ng-init="init()" ng-controller="PhotographerController">

   

</div>
@stop

@section('script')
<script>
    var photographer = '<?php echo json_encode($photolist); ?>';
</script>
    
<script src="{{asset('js/Photographer/PhotographerJS.js')}}"></script>
@stop