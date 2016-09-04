angular.module('advertApp').controller('FlatDetailsController', ['$scope','Flat','$stateParams',
    function ($scope, Flat, $stateParams) {
        $scope.flat = Flat.get({id: $stateParams.id});
        console.log($scope.flat);
    }]);
