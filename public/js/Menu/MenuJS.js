app.controller('MenuController', function ($scope, $http) {
    $scope.images = typeof photographers !== "undefined" ? photographers ? photographers : null : null;
    $scope.image2 = typeof photographer !== "undefined" ? photographer ? photographer : null : null;

    $scope.init = function (page) {
        page = page || null;
        // debugger;
        var path = base_path + '/imglist';
        $http.get(path).then(
            function (response) {
                // debugger;
                // alert(response.data[0].imgidex_id);
                $scope.images = response.data;
                return $scope.images;
            
            },
            function (response) {
                
                alert('fail');
                
            }
        );
    };
});


