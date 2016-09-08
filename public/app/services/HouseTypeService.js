angular.module('advertApp').factory('HouseType', ['$resource', function ($resource) {
    return $resource('/api/houseTypes/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);
