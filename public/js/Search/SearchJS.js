
var app1 = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app1.controller('SearchController', function($scope, $http){

$scope.searchValue = typeof searchValue !== "undefined" ? searchValue ? searchValue : null : null;


    $scope.search = function(e){
        alert('hi');
        //ส่งไปเช็ค backend
    };

    $scope.init = function (page) {
        debugger;
        page = page || null;
        alert('hi');
    };

});

$(function(){
    $('#search').slideDown("slow");

});
