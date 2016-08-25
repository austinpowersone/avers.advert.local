var advertApp = angular.module('advertApp', ['ngResource','ui.router']);

advertApp.config(['$resourceProvider','$stateProvider', function ($resourceProvider, $stateProvider) {
    $stateProvider
        .state('material',{
            url: "/materials",
            templateUrl: 'app/views/material.html',
            controller: 'MaterialController'
        })
        .state('flats',{
            url: "/flats",
            templateUrl: 'app/views/flats.html',
            controller: 'FlatController'
        })
        .state('houses',{
            url: "/houses",
            templateUrl: 'app/views/house.html',
            controller: 'HouseController'
        })
        .state('flat_details',{
            url: "/flats/:id",
            templateUrl: 'app/views/flat_details.html',
            controller: 'FlatDetailsController'
        })
        .state('house_details',{
            url: "/houses/:id",
            templateUrl: 'app/views/house_details.html',
            controller: 'HouseDetailsController'
        })
    $resourceProvider.defaults.stripTrailingSlashes = false;
}]);