@extends('layout.main')
@section('import')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">

@endsection
@section('body')
<div ng-controller="SearchController">
<section class="bg-search">

    <div ng-form ng-init="init()">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
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
                                            <select  class="form-control col-sm-7" id="sel1"  ng-model="searchValue.location" >

                                                <option ng-repeat="l in location" value="<% l.loc_id %>"><% l.name %></option>

                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-center1">
                                            <label class="col-sm-5 control-label" for="sel1">ราคา:</label>
                                            <select  class="form-control col-sm-7" ng-model="searchValue.cost" id="sel1">

                                                <option ng-repeat="c in cost" value="<% c.cost_id %>"><% c.detail %></option>

                                            </select>    
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 form-center1">
                                            <label class="col-sm-5 control-label" for="sel1">รูปแบบ:</label>
                                            <select  class="form-control col-sm-7" ng-model="searchValue.service" >

                                                <option ng-repeat="s in service" value="<% s.ser_id %>" ><% s.detail %></option>

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
                            <button class="btnSearch" type="button" ng-model="check" ng-click="searchPG(searchValue)">
                                <i class="glyphicon glyphicon-search"></i>
                                ค้นหา
                            </button>
                        </div>
                    </div>
                </div>
            </div>    
            </div>
        </div>
            
        <!-- <div ng-repeat="obj in photographyList"></div> -->
        
    </div>

</section>
<setion>
    <div ng-if="check">
        <div class="container" ng-repeat="obj in photographyList">    
            <div class="card hovercard" >
                <img src="<% obj.cover_img %>" alt=""/>
                <div class="avatar">
                    <img src="<% obj.profile_img%>" alt="" />
                </div>
                <div class="info">
                    <div class="title"></div>
                    <% obj.penname %></div>
                    <div class="desc"><% obj.description %></div>
                    <div class="desc"><% obj.fulltime %></div>
                    <div class="desc"><% obj.parttime %></div>
                </div>
                <div class="bottom">
                    <button class="btn btn-default">ส่อง</button>
                </div>        
            </div>        
    </div>
    </div>
</setion>
</div>
@endsection

@section('script')

<script src="{{asset('js/Search/SearchJS.js')}}"></script>
@endsection