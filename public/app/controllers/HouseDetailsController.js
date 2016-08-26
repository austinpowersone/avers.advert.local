angular.module('advertApp').controller('HouseDetailsController', ['$scope','House','$stateParams',
    function ($scope, House, $stateParams) {
        $scope.house = {
            'id' : $stateParams.id,
            'title' : 'title' + $stateParams.id
        }
    }]);
