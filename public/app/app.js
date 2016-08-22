var advertApp = angular.module('advertApp', ['ngRoute','ngResource']);

advertApp.config(['$routeProvider', function ($routeProvider) {
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
    $routeProvider.otherwise(
        {
            templateUrl: 'app/views/error.html',
            controller: 'ErrorController'
        });
}]);
