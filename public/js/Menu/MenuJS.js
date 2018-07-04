var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('MenuController', function ($scope, $http) {
    $scope.photographers = typeof photographers !== "undefined" ? photographers ? photographers : null : null;
    $scope.photographer = typeof photographer !== "undefined" ? photographer ? photographer : null : null;

    $scope.init = function (page) {
        page = page || null;
       
        var path = base_path + '/imglist';
        $http.get(path).then(
            function (response) {
                // debugger;
                //   alert(response.data);
                $scope.photographers = response.data;
                //   alert($scope.photographers);
                return $scope.photographers;
            },
            function (response) {
                alert('fail');
            }
        );
    };
});