var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('SearchController', function ($scope, $http ,$location, $anchorScroll) {

    $scope.photographyList = typeof photographyList != "undefined" ? photographyList ? photographyList : null : null;
    $scope.searchValue = {
        location: 'L1',
        cost: '1',
        service: 'fulltime',
        date: '',
        typeproject:'pj_degree'

    };
    $scope.location = typeof location != "undefined" ? location ? location : null : null;
    $scope.cost = typeof cost != "undefined" ? cost ? cost : null : null;
    $scope.service = typeof service != "undefined" ? service ? service : null : null;
    $scope.typeproject = typeof typeproject != "undefined" ? typeproject ? typeproject : null : null;
    $scope.check = false;
    $scope.alert = {
        message:''
    };
    $scope.searchPG = function (e) {
        // debugger;
       
        var path = base_path + '/photolist/search';
        var req = {
            method: 'POST',
            url: path,
            data: e
        }
        $http(req).then(function (response) {
                debugger;
                // alert(response.data);
                $scope.photographyList=response.data;
                if( $scope.photographyList != null &&  $scope.photographyList.length != 0)
                {
                    $scope.check = true;
                    $scope.alert.message = '';
                    gotoBottom();
                }
                else{
                    // debugger;
                    // alert("ไม่พบข้อมูลช่างภาพที่ค้นหา");
                    $scope.alert.message = '*****ไม่พบช่างภาพเลยจ้า*****';
                }                
                                
            },
            function (response) {
                // debugger;
                alert('fail');
                
            }
        );
    };

    function gotoBottom() {
        $location.hash('bottom');
        $anchorScroll();
      };


    $scope.init = function (page) {
        page = page || null;
        path = base_path + '/getselect';
        // debugger;
        $http.get(path).then(function (response) {
            // debugger;
            $scope.location = response.data[0];
            $scope.cost = response.data[1];
            $scope.service = response.data[2];
            $scope.typeproject = response.data[3];
        }, function (response) {
            // debugger;
            alert('fail');
        });
    }



});




     
       

$(function () {
    $('#search').slideDown(1500);

});