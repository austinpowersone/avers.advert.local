angular.module('advertApp').factory('BathroomTypes', ['$resource', function ($resource) {
    return $resource('/api/bathroomTypes/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);