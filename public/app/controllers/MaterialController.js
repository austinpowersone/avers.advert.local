angular.module('advertApp').controller('MaterialController', ['$scope','Material',
    function ($scope, Material) {
    $scope.material = Material.get({'id':50});
}]);
