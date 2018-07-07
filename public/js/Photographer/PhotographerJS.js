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
            method: 'POST',
            url: path,
        };

        $http(req).then(
            function (response) {
                debugger;
                $scope.photographer = response.data;
                
            },
            function (response) {
                // debugger;
                alert('fail');
            }
        );
    };
});