angular.module('advertApp').factory('FlatSchema', ['$resource', function ($resource) {
    return $resource('/api/flatSchemas/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);
