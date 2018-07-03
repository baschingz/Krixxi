var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('PhotographerController', function ($scope, $http) {
    $scope.photographers = typeof photographers !== "undefined" ? photographers ? photographers : null : null;
    $scope.photographer = typeof photographer !== "undefined" ? photographer ? photographer : null : null;

    $scope.init = function (page) {
        page = page || null;
        
        $timeout(function () {

        }, 0);
    };
});

