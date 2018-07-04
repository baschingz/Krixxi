var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('SearchController',function($scope, $http){

$scope.photographyList = typeof searchValue !== "undefined" ? searchValue ? searchValue : null : null;
$scope.searchValue={
    location:'',
    rate:'',
    service:'',
    date:''
}
$scope.searchPG = function(e){
        debugger;
        // alert(e.location+e.rate+e.service+e.date);
        //ส่งไปเช็ค backend
        var path = base_path +'/photolist/search';   
        $http.get(path).then(function(response)
    {
        if(response.data)
        {
            
        }
    },
    function(response)
    {
        alert('fail');
    }
    );
    };


});

$(function(){
    $('#search').slideDown("slow");
});
