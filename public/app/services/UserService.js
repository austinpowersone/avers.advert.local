angular.module('advertApp').factory('User', ['$resource', function ($resource) {
    return $resource('/api/users/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);
