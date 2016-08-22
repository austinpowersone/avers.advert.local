angular.module('advertApp').controller('StreetController', ['$scope','$http', function ($scope, $http) {
    $http.get('/api/streets').success(function (data) {
        $scope.streets = data;
    })
}]);
