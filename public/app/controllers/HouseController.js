angular.module('advertApp').controller('HouseController', ['$rootScope','House',
    function ($rootScope, House) {
        $rootScope.houses = House.query();
    }]);

