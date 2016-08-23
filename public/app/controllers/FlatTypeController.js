angular.module('advertApp').controller('FlatTypeController', ['$scope','FlatType',
    function ($scope, FlatType) {
        $scope.flatTypes = FlatType.query();
    }]);

