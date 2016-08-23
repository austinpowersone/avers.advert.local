var advertApp = angular.module('advertApp', ['ngRoute','ngResource']);

advertApp.config(['$routeProvider','$resourceProvider', function ($routeProvider, $resourceProvider) {
    $routeProvider.when('/',
        {
            templateUrl: 'app/views/index.html',
            controller: 'IndexController'
        });
    $routeProvider.when('/flats',
        {
            templateUrl: 'app/views/flats.html',
            controller: 'FlatController'
        });
    $routeProvider.when('/streets',
        {
            templateUrl: 'app/views/street.html',
            controller: 'StreetController'
        });
    $routeProvider.when('/materials',
        {
            templateUrl: 'app/views/material.html',
            controller: 'MaterialController'
        });
    $routeProvider.when('/regions',
        {
            templateUrl: 'app/views/region.html',
            controller: 'RegionController'
        });
    $routeProvider.when('/flatTypes',
        {
            templateUrl: 'app/views/flatType.html',
            controller: 'FlatTypeController'
        });
    $routeProvider.when('/flatSchemas',
        {
            templateUrl: 'app/views/flatSchema.html',
            controller: 'FlatSchemaController'
        });
    $routeProvider.otherwise(
        {
            templateUrl: 'app/views/error.html',
            controller: 'ErrorController'
        });
    $resourceProvider.defaults.stripTrailingSlashes = false;
}]);