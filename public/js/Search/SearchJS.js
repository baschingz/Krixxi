var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('SearchController', function ($scope, $http) {

    $scope.photographyList = typeof searchValue !== "undefined" ? searchValue ? searchValue : null : null;
    $scope.searchValue = {
        location: '',
        cost: null,
        service: '',
        date: ''
    };
    $scope.location = typeof location != "undefined" ? location ? location : null : null;
    $scope.cost = typeof cost != "undefined" ? cost ? cost : null : null;
    $scope.service = typeof service != "undefined" ? service ? service : null : null;

    $scope.searchPG = function (e) {
        debugger;
        var path = base_path + '/photolist/search';
        var req = {
            method: 'POST',
            url: path,
            data: e
        }
        $http(req).then(function (response) {
                debugger;
                alert(response.data);
            },
            function (response) {
                // debugger;
                alert('fail');
            }
        );
    };

    $scope.init = function (page) {
        page = page || null;
        path = base_path + '/getselect';

        $http.get(path).then(function (response) {
            
            $scope.location = response.data[0];
            $scope.cost = response.data[1];
            $scope.service = response.data[2];
           
        }, function (response) {
            alert('fail');
        });
    }

});

$(function () {
    $('#search').slideDown("slow");

});