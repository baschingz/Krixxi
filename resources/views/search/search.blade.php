@extends('layout.main')
@section('import')
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">

@endsection
@section('body')

    <div ng-controller="SearchController">
        <section class="bg-search">
            <div ng-form ng-init="init()">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="containerSearch col-sm-10 col-sm-offset-1" hidden id="search">
                                <div class="panelSearch">
                                    <div class="panel-headingSearch form-center font-topic">ค้นหา</div>
                                    <div class="panel-body">
                                        <!-- <div ng-contoller="SearchController"> -->
                                        <div class="form-center">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="col-sm-6 form-center1">
                                                        <label class="col-sm-6 control-label  font-style">สถานที่:</label>
                                                        <select class="form-control col-sm-6"
                                                                ng-model="searchValue.location">
                                                            <option ng-repeat="l in location" value="<% l.loc_id %>">
                                                            <% l.name %>
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 form-center1">
                                                        <label class="col-sm-6 control-label  font-style">ราคา:</label>
                                                        <select class="form-control col-sm-6"
                                                                ng-model="searchValue.cost">

                                                            <option ng-repeat="c in cost" value="<% c.cost_id %>">
                                                            <%c.detail %>
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6 form-center1">
                                                        <label class="col-sm-6 control-label font-style">รูปแบบ:</label>
                                                        <select class="form-control col-sm-6"
                                                                ng-model="searchValue.service">

                                                            <option ng-repeat="s in service" value="<% s.ser_id %>">
                                                            <%s.detail %>
                                                            </option>

                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 form-center1">
                                                        <label class="col-sm-6 control-label  font-style">ประเภทงาน:</label>
                                                        <select class="form-control col-sm-6" ng-model="searchValue.typeproject" disabled="disabled"  readonly="readonly" >

                                                            <option ng-repeat="p in typeproject"  value="<% p.project_id %>"><% p.project_name %></option>

                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 form-center1">
                                                    
                                                        <label class="col-sm-6 control-label font-style">วัน-เวลา:</label>
                                                        <div class='input-group date col-sm-6 d'>
                                                            <input type="date" class="form-control  form-search  pull-left"
                                                                id="datePicker" ng-model="searchValue.date"
                                                                >
                                                                <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div style="color:red; text-align:center" ng-model="alert"><% alert.message %></div>
                                        <!-- </div> -->
                                        
                                    </div>
                                    <button class="btnSearch" id="btn1" type="button"  ng-click="searchPG(searchValue)">
                                        <i class="glyphicon glyphicon-search"></i>
                                        ค้นหา
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <setion>
            <!-- <div ng-if="check"> --> <!--card profilr-->
            <div class="container" id="bottom">
                <div class="row">
                    <div class="col-lg-6 col-sm-6" ng-repeat="obj in photographyList">
                        <div class="card hovercard border-card">
                            <div class="cardheader">
                                <img src="<% obj.cover_img %>"/>
                            </div>
                            <div class="avatar">
                                <!-- <img alt="" src="https://avatars1.githubusercontent.com/u/11767240?v=3&s=400"> -->
                                <a href="{{url('/')}}/photographer/<% obj.pg_id %>" target="_blank"> <img src="<% obj.profile_img%>" class="img-cover1" alt="<% obj.penname %>  "/></a>
                            </div>
                            <div class="info">
                                <div class="title row">
                                    <div class="col-sm-12">
                                        <i class="glyphicon glyphicon-camera"></i>
                                        <% obj.penname %>       
                                    </div>
                                </div>
                                <div class="desc row">
                                    <div class="col-sm-12">
                                        <i class="glyphicon glyphicon-list-alt"></i>
                                        <% obj.description %>
                                    </div>
                                </div>
                                <div class="desc row">
                                    <div class="col-sm-12">
                                        <i class="glyphicon glyphicon glyphicon-time"></i>
                                        Fulltime : <% obj.fulltime %>
                                    </div>
                                </div>
                                <div class="desc row">
                                    <div class="col-sm-12">
                                        <i class="glyphicon glyphicon glyphicon-time"></i>
                                        Parttime : <% obj.parttime %>
                                    </div>
                                </div>
                                <div class="desc center2 row">
                                    <div class="col-sm-12">
                                        <i class="glyphicon glyphicon-star star-color"></i>
                                        <i class="glyphicon glyphicon-star star-color"></i>
                                        <i class="glyphicon glyphicon-star star-color"></i>
                                        <i class="glyphicon glyphicon-star star-color"></i>
                                        <i class="glyphicon glyphicon-star star-color"></i>
                                    </div>
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
    <script>
    $(function () {
        $('#div1').slideDown("slow");
        // $("#bnt").click(function (){
        //         $('html, body').animate({
        //             scrollTop: $("#div2").offset().top
        //         }, 2000);
        //     });
    });

    
</script>
<script>
function showDate(){
    date1 = new Date ();
    date = date1.getDate();
    year = date1.getFullYear();
    month = date1.getMonth();

    document.getElementByid("abc").innerHTML= "date + " / " + month + " / "  + year;"
}
</script>

@endsection