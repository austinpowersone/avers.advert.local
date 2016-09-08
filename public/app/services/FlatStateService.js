angular.module('advertApp').factory('FlatState', ['$resource', function ($resource) {
    return $resource('/api/flatStates/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);