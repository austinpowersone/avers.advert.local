angular.module('advertApp').factory('House', ['$resource', function ($resource) {
    return $resource('/api/houses/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);
