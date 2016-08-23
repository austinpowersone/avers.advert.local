angular.module('advertApp').controller('StreetController', ['$scope','Street', function ($scope, Street) {
    $scope.streets = Street.query();
}]);
