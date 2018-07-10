var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('SearchController', function ($scope, $http) {

    $scope.photographyList = typeof searchValue !== "undefined" ? searchValue ? searchValue : null : null;
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
    $scope.alert = null;
    $scope.searchPG = function (e) {
        debugger;
        if(e.cost == "0")
        {
            // alert("กรุณาใส่ราคา");
            
            return false;
        }
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
                }
                else{
                    // debugger;
                    alert("ไม่พบข้อมูลช่างภาพที่ค้นหา");
                }                
                                
            },
            function (response) {
                debugger;
                alert('fail');
                
            }
        );
    };



    $scope.init = function (page) {
        page = page || null;
        path = base_path + '/getselect';
        // debugger;
        $http.get(path).then(function (response) {
            debugger;
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