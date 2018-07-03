@extends('layout.main')
@section('import')

@endsection
@section('body')

<div ng-controller="SearchController">
    <div ng-form ng-init="init()">
<div class="containerSearch col-sm-10 col-sm-offset-1" hidden id="search" >
    <div class="panelSearch" >
        <div class="panel-headingSearch form-center font-topic">ค้นหา</div>
            <div class="panel-body">
                <div ng-contoller="SearchController">
                    <div class="form-center">
                        <div class="col-sm-12" >
                            <div class="form-group">
                                <div class="col-sm-6 form-center1" >
                                    <label class="col-sm-5 control-label" for="sel1">สถานที่:</label>
                                    <select  class="form-control col-sm-7" id="sel1"  ng-model="searchValue.location">
                                        <option value="1">ภาคอีสาน</option>
                                        <option value="2">ภาคกลาง</option>
                                        <option value="3">ภาคเหนือ</option>
                                        <option value="4">ภาคใต้</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-center1">
                                    <label class="col-sm-5 control-label" for="sel1">ราคา:</label>
                                    <select  class="form-control col-sm-7" ng-model="searchValue.rate" id="sel1">
                                        <option value="1">0-999</option>
                                        <option value="2">1000-1999</option>
                                        <option value="3">2000-2999</option>
                                        <option value="4">3000-3999</option>
                                        <option value="5">4000-4999</option>
                                        <option value="6">5000-5999</option>
                                        <option value="7">>6000</option>
                                    </select>    
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 form-center1">
                                <label class="col-sm-5 control-label" for="sel1">รูปแบบ:</label>
                                    <select  class="form-control col-sm-7" ng-model="searchValue.service" >
                                        <option value="1" >เต็มวัน</option>
                                        <option value="2">ครึ่งวัน</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 form-center1">
                                <label class="col-sm-5 control-label" for="sel1">วัน-เวลา:</label>
                                <input type="text" class="form-control col-sm-7 form-search" id="datePicker" ng-model="searchValue.date" readonly="readonly">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>        
        <div class="panel-footerSearch form-center" >
            <div>
                <button class="btnSearch" type="button" ng-click="searchPG(searchValue)">
                    <i class="glyphicon glyphicon-search"></i>
                    ค้นหา
                </button>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection

@section('script')

<script src="{{asset('js/Search/SearchJS.js')}}"></script>
@endsection