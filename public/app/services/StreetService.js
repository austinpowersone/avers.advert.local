angular.module('advertApp').factory('Street', ['$resource', function ($resource) {
    return $resource('/api/streets/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);
