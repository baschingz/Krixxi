
var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('SearchController',function($scope, $http){

// $scope.searchValue = typeof searchValue !== "undefined" ? searchValue ? searchValue : null : null;
$scope.searchValue={
    location:'',
    rate:'',
    service:'',
    date:''
}

    $scope.searchPG = function(e){
        debugger;
        alert('hi');
        //ส่งไปเช็ค backend
    };


});

$(function(){
    $('#search').slideDown("slow");

});
