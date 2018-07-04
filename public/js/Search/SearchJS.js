var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('SearchController', function ($scope, $http) {

    $scope.photographyList = typeof searchValue !== "undefined" ? searchValue ? searchValue : null : null;
    $scope.searchValue = {
        location: '',
        rate: '',
        service: '',
        date: ''
    };
    $scope.searchPG = function (e) {
        debugger;
        var path = base_path + '/photolist/search';
        var req ={
            method:'POST',            
            url:path,
            data: e
        }
        $http(req).then(function (response) {
                debugger;
                alert(response.data);
            },
            function (response) {
                debugger;
                alert('fail');
            }
        );
    };

});

$(function () {
    $('#search').slideDown("slow");

});