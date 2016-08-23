angular.module('advertApp').controller('MaterialController', ['$scope','Material',
    function ($scope, Material) {
    $scope.materials = Material.query();
}]);
