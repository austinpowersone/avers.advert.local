angular.module('advertApp').factory('Flat', ['$resource', function ($resource) {
    return $resource('/api/flats/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);
