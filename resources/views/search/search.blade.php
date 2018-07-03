@extends('layout.main')
@section('body')
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">ค้นหา</div>
        <div class="panel-body">
            <div class="container">
                <div class="form-horizontal">
                    <div class="col-xs-10">
                        <div class="form-group">
                            <div class="col-xs-6">ttest</div>
                            <div class="col-xs-6">ttest</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="panel-footer" style="text-align:right;">
            <div>
                <button class="btn btn-success" type="button">
                    <i class="glyphicon glyphicon-search"></i>
                    ค้นหา
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{asset('js/Search/SearchJS.js')}}"></script>
@stopendsection