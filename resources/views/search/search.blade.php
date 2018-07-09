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
                        <div class="containerSearch col-sm-10 col-sm-offset-1" hidden id="search">
                            <div class="panelSearch">
                                <div class="panel-headingSearch form-center font-topic">ค้นหา</div>
                                <div class="panel-body">
                                    <!-- <div ng-contoller="SearchController"> -->
                                        <div class="form-center">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="col-sm-6 form-center1">
                                                        <label class="col-sm-5 control-label  font-style" >สถานที่:</label>
                                                        <select class="form-control col-sm-7" ng-model="searchValue.location">

                                                            <option ng-repeat="l in location" value="<% l.loc_id %>"><% l.name %>  </option>

                                                        </select>
                                                    </div>                                                    
                                                    <div class="col-sm-6 form-center1">
                                                        <label class="col-sm-5 control-label  font-style">ราคา:</label>
                                                        <select class="form-control col-sm-7" ng-model="searchValue.cost" >

                                                            <option ng-repeat="c in cost" value="<% c.cost_id %>"><% c.detail %>  </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6 form-center1">
                                                        <label class="col-sm-5 control-label font-style" >รูปแบบ:</label>
                                                        <select class="form-control col-sm-7"
                                                                ng-model="searchValue.service">

                                                            <option ng-repeat="s in service" value="<% s.ser_id %>"><% s.detail %> </option>

                                                        </select>
                                                    </div>
                                                    
                                                    <div class="col-sm-6 form-center1">
                                                        <label class="col-sm-5 control-label  font-style">ประเภทงาน:</label>
                                                        <select class="form-control col-sm-7" 
                                                                ng-model="searchValue.typeproject" >

                                                            <option ng-repeat="p in typeproject" value="<% p.project_id %>"><% p.project_name %></option>

                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 form-center1">
                                                        <label class="col-sm-5 control-label font-stylel" >วัน-เวลา:</label>
                                                        <input type="text" class="form-control col-sm-7 form-search"
                                                               id="datePicker" ng-model="searchValue.date" readonly="readonly">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <button class="btnSearch" type="button" ng-click="searchPG(searchValue)">
                                    <i class="glyphicon glyphicon-search"></i>
                                    ค้นหา
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <setion>            
        <!-- <div ng-if="check"> -->
            <div class="container">
                <div class="col-sm-12">
                    <div class="col-sm-6" ng-repeat="obj in photographyList" >
                     <div class="card-profile hovercard">
                            <img src="<% obj.cover_img %>" alt=""/>
                            <div class="avatar">
                            <a href="{{url('/')}}/photographer/<% obj.pg_id %>"> <img src="<% obj.profile_img%>" alt=""/></a>
                            </div>
                            <div class="info">                                
                                <div class="title">
                                    <i class="glyphicon glyphicon-camera"></i>
                                    <% obj.penname %>   
                                </div>
                                <div class="desc">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                    <% obj.description %>
                                </div>
                                <div class="desc">
                                    <i class="glyphicon glyphicon glyphicon-time"></i>
                                    Fulltime : <% obj.fulltime %>
                                </div>
                                <div class="desc">
                                    <i class="glyphicon glyphicon glyphicon-time"></i>
                                    Parttime : <% obj.parttime %>
                                </div>
                                <div>
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                    <i class="glyphicon glyphicon-star star-color"></i>
                                </div>
                            </div>
                            <div>
                            <a href="{{url('/')}}/photographer/<% obj.pg_id %>"> <button class="btnSeeProfile">ส่อง</button>  </a>
                            </div>
                        </div>
                        </div>
                    </div>
                   
                </div>
            <!-- </div> -->
        </setion>
        
    </div>
@endsection

@section('script')

    <script src="{{asset('js/Search/SearchJS.js')}}"></script>
@endsection