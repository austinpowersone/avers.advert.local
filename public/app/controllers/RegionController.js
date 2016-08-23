angular.module('advertApp').controller('RegionController', ['$scope','Region',
    function ($scope, Region) {
        $scope.regions = Region.query();
    }]);