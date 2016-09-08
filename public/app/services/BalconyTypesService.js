angular.module('advertApp').factory('BalconyTypes', ['$resource', function ($resource) {
    return $resource('/api/balconyTypes/:id/',{id: '@id'},{
        update:{
            method: 'PUT'
        }
    });
}]);