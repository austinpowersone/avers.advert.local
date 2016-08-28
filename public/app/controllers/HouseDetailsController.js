angular.module('advertApp').controller('HouseDetailsController', ['$scope','House','$stateParams',
    function ($scope, House, $stateParams) {
        $scope.house = House.get({id: $stateParams.id});
    }]);
