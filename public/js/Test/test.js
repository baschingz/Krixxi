angular.module('myApp',[])
.controller('TestController',function($scope){
        $scope.EmployeeList=null;

        $scope.Employee = {
            emName : '',
            emTel : ''
        }

        $scope.EmployeeTmp = angular.copy($scope.Employee);

        $scope.addEmployee = function(e){
            $scope.EmployeeList = $scope.EmployeeList || [];
            $scope.EmployeeList.push(e);

            $scope.Employee = angular.copy($scope.EmployeeTmp);
        }

        
});