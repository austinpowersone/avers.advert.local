angular.module('advertApp').controller('FlatController', ['$rootScope','Flat',
    function ($rootScope, Flat) {
        $rootScope.flats = Flat.query();
}]);