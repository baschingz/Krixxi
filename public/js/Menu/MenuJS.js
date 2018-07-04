var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('MenuController', function ($scope, $http) {
    $scope.images = typeof photographers !== "undefined" ? photographers ? photographers : null : null;
    $scope.image = typeof photographer !== "undefined" ? photographer ? photographer : null : null;

    $scope.init = function (page) {
        page = page || null;

        var path = base_path + '/imglist';
        $http.get(path).then(
            function (response) {

                $scope.images = response.data;
                return $scope.images;
            },
            function (response) {
                alert('fail');
            }
        );
    };
});