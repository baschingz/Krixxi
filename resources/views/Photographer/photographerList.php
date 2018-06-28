@section('body')
<div>
@foreach($photolist in $photo)
{{$photo.name}}
@endfor
</div>
@stop

@section('script')
<script scr="{{URL::asset('js/Photograher/photographerJS.js')}}"></script>
@stop
