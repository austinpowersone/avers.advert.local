angular.module('advertApp').controller('FlatController', ['$scope','Flat',
    function ($scope, Flat) {
        $scope.flats = Flat.query();
}]);
