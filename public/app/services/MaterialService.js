angular.module('advertApp').factory('Material', ['$resource', function ($resource) {
    return $resource('/api/materials/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);