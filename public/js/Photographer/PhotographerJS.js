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
                // debugger;
                $scope.photographer = response.data;
                
            },
            function (response) {
                // debugger;
                alert('fail');
            }
        );
    };
});

 

app.controller('AlbumController', function ($scope, $http) {
    $scope.Albums = typeof photographers !== "undefined" ? photographers ? photographers : null : null;
    $scope.Images = typeof photographer !== "undefined" ? photographer ? photographer : null : null;

    $scope.init = function (page) {
        getAlbum(page);        
        
    };

    function getAlbum(page) {
        page = page || null;
        debugger;
      
        var id = page;
        var path = base_path + '/getAlbum/' + id;
        var req = {
            method: 'GET',
            url: path,
        };

        $http(req).then(
            function (response) {
                debugger;
                $scope.Albums = response.data;
                
            },
            function (response) {
                debugger;
                alert('fail');
            }
        );
    }
    

    function Images(page) {
            page = page || null;
            debugger;
          
            var id = page;
            var path = base_path + '/getImageList/' + id;
            var req = {
                method: 'GET',
                url: path,
            };
    
            $http(req).then(
                function (response) {
                    debugger;
                    $scope.Images = response.data;
    
                    
                },
                function (response) {
                    debugger;
                    alert('fail');
                }
            );
        };

    
});





