angular.module('advertApp').controller('UserController', ['$scope','User','$stateParams',
    function ($scope, User, $stateParams) {
        $scope.user = User.get({id: 1});
    }]);