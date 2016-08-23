angular.module('advertApp').factory('FlatType', ['$resource', function ($resource) {
    return $resource('/api/flatTypes/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);
