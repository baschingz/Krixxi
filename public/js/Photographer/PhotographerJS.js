var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('PhotographerController', function ($scope, $http) {
    $scope.photographers = typeof photographers !== "undefined" ? photographers ? photographers : null : null;
    $scope.photographer = {
        pgid:'',
        fullname:'',
        tel:'',
        old:''
    }
//    $scope.getPhotographerList = function () {
//        $http({
//            method: 'GET',
//            url: 'photographerlist'
//        }).then(
//                function (response) {
//                    $scope.photographers = response.data;
//                    return view('layout.index');
//                }, function (response) {
//
//        }
//        );
//    }

    $scope.init = function (page) {
        page = page || null;
        
        $timeout(function () {

        }, 0);
    };
});