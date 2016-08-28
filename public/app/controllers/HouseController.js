angular.module('advertApp').controller('HouseController', ['$scope','House',
    function ($scope, House) {
        $scope.houses = House.query();
    }]);

