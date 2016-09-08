angular.module('advertApp').factory('Site', ['$resource', function ($resource) {
    return $resource('/api/sites/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);

