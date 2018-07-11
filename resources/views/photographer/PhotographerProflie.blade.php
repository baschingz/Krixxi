@extends('layout.main')
@section('body')
    <div id="form1">
        <div ng-controller="PhotographerController" ng-init="init({{$id}})">
            <div class="card" style="margin-top:-5%;">
                <img class="card-img cover-img" src="<% photographer[0].cover_img %>">
            </div>
            <div class="container-fluid" style="padding-top:1%; padding-bottom:2%;">
                <div class="col-md-3 col-md-offset-1">
                    <img src="<% photographer[0].profile_img %>" class="photographer-avatar">
                </div>
                <div class="col-md-4" style="padding-top:3%;">
                    <div class="h1"><% photographer[0].penname %></div>
                    <div style="font-size:20pxฎฏ;"> Detail : <% photographer[0].description %></div>
                    <ul class="list-unstyled" style="font-size:16px;">
                        <li><span class="glyphicon glyphicon-user" aria-hidden="true" mg-model="">  Name     :  <%  photographer[0].fullname %></span>
                        </li>
                        <li><span class="glyphicon glyphicon-globe" aria-hidden="true"> Region    :   <% photographer[0].name %></span>
                        </li>
                        <!-- <li><span class="glyphicon glyphicon-phone" aria-hidden="true"> TEL    :  </span></li>
                        <a href="<% photographer[0].facebook %> " target="_blank">
                            <li><span class="fa fa-facebook-square" aria-hidden="true"> Facebook    :  <% photographer[0].facebook %></span>
                            </li>
                        </a> -->
                    </ul>
                </div>
                <div class="col-md-3" style="padding-top:8%;">
                    <div style="font-size:20px;">Rate</div>
                    <ul class="list-unstyled" style="font-size:16px;">
                        <li><span class="glyphicon glyphicon-camera" aria-hidden="true"> Half    :  <% photographer[0].parttime %></span>
                        </li>
                        <li><span class="glyphicon glyphicon-camera" aria-hidden="true"> Full    :  <% photographer[0].fulltime %></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ------------Album------------ -->

            <div class="container-fluid album-slide" id="album1" ng-controller="AlbumController"
                 ng-init="getImage({{$id}})">
                <div class="card" style="border: none; padding-bottom:2%;" ng-repeat="imgs in Images">
                    <div class="row" ng-repeat="img in imgs">
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <img src="<% img[0].albumcover %>" class="albam-size card-img">
                                <div class="card-img-overlay">
                                    <div class="album-title"><% img[0].albumname %></div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h3 class="card-title"><% img[0].albumname %></h3>
                                <div ng-repeat="imgall in img[1]">
                                    <div ng-repeat="imgb64 in imgall" class="col-sm-2 border-img">
                                        <img src="<% imgb64.imgBase64 %>" class="photo-size">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
                    
                <!-- ------------Album------------ -->                 
           
        </div>
</div>
        <div class="container-fluid" style="margin-top:3%;">
            <div class="col-md-6 col-md-offset-3">
                <label class="comment-label">Comments</label>
                <div class="media comments-list">
                    <div class="media-left media-top">
                        <img src="{{asset('image/Profile_ex/avatar_ex.png')}}" class="comment-avatar">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Username</h4>
                        hello
                    </div>
                    <div class="comment-time">07/07/2018 12:28 PM</div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <img src="{{asset('image/Profile_ex/avatar_ex.png')}}" class="comment-avatar">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Username</h4>
                        <div id="comment1"><input type="text" class="form-control" placeholder="Comment"></div>
                        <div id="comment2" hidden><textarea class="form-control" rows="3" autofocus
                                                            placeholder="Comment"></textarea>
                            <div style="margin-top:5px;">
                                <button type="button" class="btn-comment">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection

        @section('script')
            <script>
                $('#comment1').click(function () {
                    $('#comment1').hide();
                    $('#comment2').show();

                });
                
            </script>


            <script src="{{asset('js/Photographer/PhotographerJS.js')}}"></script>
@endsection