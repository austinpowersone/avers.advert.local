angular.module('advertApp').controller('UserDetailsController', ['$scope','User','$stateParams',
    function ($scope, User, $stateParams) {
        $scope.user = User.get({id: $stateParams.id});
    }]);
