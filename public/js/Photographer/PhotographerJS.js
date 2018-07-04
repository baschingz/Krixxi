var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('PhotographerController', function ($scope, $http) {
    $scope.photographers = typeof photographers !== "undefined" ? photographers ? photographers : null : null;
    $scope.photographer = typeof photographer !== "undefined" ? photographer ? photographer : null : null;

    $scope.init = function (page) {
        page = page || null;
        // debugger;

        var id = page;
        var path = base_path + '/photolist/' + id;
        var req = {
            method: 'GET',
            url: path,
        };

        $http(req).then(
            function (response) {
                // debugger;
                $scope.photographer = response.data;
                // alert($scope.photographer);
            },
            function (response) {
                alert('fail');
            }
        );
    };
});