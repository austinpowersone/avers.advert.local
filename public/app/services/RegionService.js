angular.module('advertApp').factory('Region', ['$resource', function ($resource) {
    return $resource('/api/regions/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);

