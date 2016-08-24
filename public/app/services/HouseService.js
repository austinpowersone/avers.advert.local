angular.module('advertApp').factory('House', ['$resource', function ($resource) {
    return $resource('/api/House/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);
